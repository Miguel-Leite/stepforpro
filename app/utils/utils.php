<?php

/**
 * Método responsável por carregar todas views do projecto
 *
 * @param string $view
 * @param array $data
 * @return void
 */
function view (string $view, array $data = []): void
{
    extract($data);
    $view = dirname(__FILE__,2) . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . $view . ".php";
    if (file_exists($view)) {
        require_once $view;
    }
}

/**
 * Método responsável por carregar os assets do projecto
 *
 * @param string $file
 * @return void
 */
function asset(string $file=''): string
{
    return rtrim(BASE_URL,'/') . "/public/". $file;
}

/**
 * Método responsável por retornar dados do usuario logo
 *
 * @return object
 */
function auth(): object
{
    return $_SESSION[AUTH_SESSION_KEY];
}

/**
 * Método responsável por redirecionar o usuario para outra pagina
 *
 * @param string $to
 * @return void
 */
function redirect(string $to)
{
    return header('Location: '.BASE_URL.$to);
}

/**
 * Método responsável por verificar se usuario não está logado
 *
 * @return mixed
 */
function logged(): mixed
{
	if (!$_SESSION[AUTH_SESSION_KEY] || !isset($_SESSION[AUTH_SESSION_KEY])) {
		return redirect(BASE_URL);
	}
}

/**
 * Método responsável por verificar se usuario já está logado
 */
function verifyAuth()
{
	if (isset($_SESSION[AUTH_SESSION_KEY])) {
		echo "<script>history.back()</script>";die;
	}	
}