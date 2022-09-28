<?php
function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    if (!$loggedUser){
        $ci->session->set_flashdata("danger", "É necessário estar logado para acessar a página");
        redirect("usuarios/logar");
    }
    return $loggedUser;
}

?>