<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(!is_numeric($idade))
{
    echo 'Informe um número para idade.';
    return;
}

if(empty($nome))
{
  echo 'Por favor, preencha o nome.';
  return;
}

if(empty($idade))
{
  echo 'Por favor, preencha a idade.';
  return;
}

if(strlen($nome) < 3)
{
  echo 'O nome deve conter mais de três caracteres.';
  return;
}

if(strlen($nome) > 20)
{  
  echo 'O nome é muito extenso.';
  return;
}

if(strlen($nome) >= 3)
{
    echo 'Por favor, verifique a sua idade.';
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count ($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo 'O nadador '.$nome. ' compete na categoria infantil';
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count ($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo 'O nadador ' .$nome. ' compete na categoria adolescente';
    }
}
else
{
    for($i = 0; $i <= count ($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo 'O nadador '.$nome. ' compete na categoria adulto';
    }
}
