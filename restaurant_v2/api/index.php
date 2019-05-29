<?php
    require "vendor/autoload.php";
    $app = new \Slim\App;


   
    $container = $app->getContainer();
    $container['db'] = function ($c) {
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=restaurant;charset=utf8", 'root', '');
    return $pdo;
    
    };
 
    // {
    // $sth = $this->db->query(SQL_QUERY)->fetchAll(PDO::FETCH_ASSOC);
    // return $this->response->withJson($sth);
    // }

    $app->get("/",function($req, $res){
        $sql = "select * from menu";
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $this->response->withJson($sth);
    });
    
    $app->post("/getAllMenu",function($req, $res, $aregs){
        $body = $req->getParsedBody();
        // print_r($body);
        $sql = "select * from menu ";
        $sql = $sql . " where menu_id = '".$body['keyword']."' ";
        $sql = $sql . " or menu_name like '%".$body['keyword']."%' ";
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $this->response->withJson($sth);
    });

    $app->post("/insert",function($req, $res, $aregs){
        $body = $req->getParsedBody();

        $sql = "insert into menu values('" . $body['menu_id']."','".$body['menu_name']."', '".$body['menu_type']."','".$body['menu_price']."' )";
        
        // $return['sql'] = $sql;
        
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $this->response->withJson($sth);
    });

    $app->post("/delete",function($req, $res, $aregs){
        $body = $req->getParsedBody();
        
        $sql = "delete from menu ";
        $sql .= " where menu_id = '".$body['menu_id']."' ";

        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $this->response->withJson($sth);
    });

    $app->post("/getMenu",function($req, $res){
        $body = $req->getParsedBody();
        // print_r($body);
        
        $sql = "SELECT * from menu ";
        $sql = $sql . " where menu_id = '".$body['keyword']."' ";
        $sql = $sql . " or menu_name like '%".$body['keyword']."%' ";
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $data = [
            "data"=>$sth,
            "nrow"=>count($sth)
        ];
        return $this->response->withJson($data);
    });

    $app->post("/delMenu",function($req, $res, $aregs){
        $body = $req->getParsedBody();

        $data = [
            "status"=>false,
            "result"=>"error"
        ];
        
        $sql = "DELETE FROM menu ";
        $sql = $sql . " where menu_id = '".$body['menu_id']."' ";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $count = $sth->rowCount();
        if($count >0){
            $data['status'] = true;
            $data['result'] = "OK";
        }
       
        return $this->response->withJson($data);
    });

    $app->post("/edit",function($req, $res, $aregs){
        $body = $req->getParsedBody();

        $sql = "UPDATE menu set menu_id = '".$body['menu_id']."', menu_name = '".$body['menu_name']."', menu_type = '".$body['menu_type']."', menu_price = '".$body['menu_price']."' ";
        $sql = $sql . " where menu_id = '".$body['menu_id']."' ";
        $sth = $this->db->prepare($sql);
        $sth->execute(); 
        $count = $sth->rowCount();
        if($count >0){
            $data['status'] = true;
            $data['result'] = "OK";
        }
        return $this->response->withJson($data);
    }); 

    $app->run();