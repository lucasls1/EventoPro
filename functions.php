<?php
/**
 * Created by PhpStorm.
 * User: XLS
 * Date: 18/05/2019
 * Time: 15:48
 */
use \EventoPro\Model\User;
use \EventoPro\Model\Carrinho;
function formatPrice($vlprice)
{
    if (!$vlprice > 0) $vlprice = 0;
    return number_format($vlprice, 2, ",", ".");
}

function formatDate($date)
{
    return date('d/m/Y',strtotime($date));
}

function checkLogin($adm_inadmin = true)
{
    return User::checkLogin($adm_inadmin);
}
function getUserName()
{
    $user = User::getFromSession();
    return $user->getnme_pessoa();
}
function getCartNrQtd()
{
    $cart = Carrinho::getFromSession();
    $totals = $cart->getEventoTotal();
    return $totals['nrqtd'];
}
function getCartVlSubTotal()
{
    $cart = Carrinho::getFromSession();
    $totals = $cart->getEventoTotal();
    return formatPrice($totals['vlr_total']);
}


?>

