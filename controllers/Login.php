<?php

   class Login extends CI_Controller {
    public function entrar(){
         $this->load->view("formlogin");
    }
    
    public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_NOME");
        echo "<h1>ATE LOGO</h1>";
    }
    
    public function page(){
        if($this->session->userdata("_NOME") != null){
            echo "<h1>PAGINA DE USUARIO</h1>";
        }else{
            redirect("/login/entrar");
        }
    }


    public function auth(){
    	$nome = $_POST["nome"];
    	$senha = $_POST["senha"];
    	$this->load->model("model");
    	$usr = $this->model->getUser($nome,$senha);
    	if($usr !== false){
    		if($usr === "admin"){
    			$this->session->set_userdata("_ID","admim");
    			redirect("/login/admin");
    		}else{
                $this->session->set_userdata("_ID",$comum);
    		    $this->session->set_userdata("_NOME",$nome);
    		    redirect("/login/comum");
    		}
    	}else{
    		redirect("/login/entrar");
    	}
    }
    
    public function comum(){
        $nome = $this->session->userdata("_NOME");
        if(isset($nome))
            echo "<h1> Bem vindo ". $nome . " </h1>";
        else
            echo "<h1>Visitante.</h1>";
    }
    
    public function admin(){
        $a = $this->session->userdata("_ID");
        if($a === "admin"){
            echo "<h1> BEM-VINDO ADMIN </h1>";
        }else{
            echo "<h1> VOCE NAO ESTA AUTORIZADO PARA VER ESTA PAGINA </h1>";
        }
    }
}


//como passar o projeto do c9.io para o github

//git init
//git add .
//git commit -m "Meu primeiro commit"
//git remote add origin https://github.com/vitor-santana/aula
//criam o .gitignore dentro de application ou no mais do c9 -> new file -> /config /cache
//colocar pasta a ser ignorada i.e /config
//git -m "Com o .gitignore"
//git push origin master

//https://github.com/romefeller/phpci - repositório do professor - conteúdo das aulas - entregar a aplicação funcionando mais o repositório do github


?>