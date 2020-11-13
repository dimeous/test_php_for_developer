<?php


namespace app;


class users extends controller
{

    protected function getAction()
    {
        if (file_exists("data.json")) {
            $string = file_get_contents("data.json");
            $json_file_data = json_decode($string, true);
        }
        if ($json_file_data) {
            $data = "<ul>";
            foreach ($json_file_data as $v) {
                $data .= "<li>name: {$v['name']}, email: {$v['email']} </li>";
            }
            $data .= "</ul>";
        } else $data = '';
        Viewer::render('index', ['data' => $data]);
    }

    protected function postAction()
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
        ];
        if (file_exists("data.json")) {
            $string = file_get_contents("data.json");
            $json_file_data = json_decode($string, true);
        }
        if ($json_file_data)
            $json_file_data[] = $data;
        else {
            $json_file_data = [];
            $json_file_data[] = $data;
        }
        $json_data = json_encode($json_file_data);
        file_put_contents('data.json', $json_data);
        header("Location: /get");
    }
}