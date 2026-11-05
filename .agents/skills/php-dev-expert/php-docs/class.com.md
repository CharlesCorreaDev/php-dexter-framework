# A classe com

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.com.php

---

# A classe com

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

## Introdução

A classe com permite instanciar um objeto COM compatível com OLE,
chamar seus métodos e acessar suas propriedades.

## Resumo da classe

class ****com****
extends
[variant](class.variant.md)
{

/\* Métodos \*/

public function [\_\_construct](com.construct.md)(  
    [string](language.types.string.md) `$module_name`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$server_name` = **`null`**,  
    [int](language.types.integer.md) `$codepage` = **`CP_ACP`**,  
    [string](language.types.string.md) `$typelib` = ""  
)

}

## Métodos sobrecarregados

O objeto retornado é um objeto sobrecarregado, o que significa que o PHP não
vê nenhum método fixo como acontece com as classes normais; em vez disso, qualquer
acesso a propriedade ou método é passado para COM.

O PHP detectará automaticamente métodos que aceitam
parâmetros por referência e converterá automaticamente variáveis normais do PHP
para um formato que possa ser passado por referência. Isso significa o método
pode ser chamado com muita naturalidade; não é necessário nenhum esforço extra no
código.

## Exemplos de com

**Exemplo #1 Exemplo de com (1)**

```
<?php
// Iniciando o Word
$word = new com("word.application") or die("Não foi possível iniciar o Word");
echo "Word carregado, versão {$word->Version}\n";

// Traz para o primeiro plano
$word->Visible = 1;

// Abre um documento vazio
$word->Documents->Add();

// Faz algumas coisas
$word->Selection->TypeText("Este é um teste...");
$word->Documents[1]->SaveAs("Test.doc inútil");

// Fechando o Word
$word->Quit();

// Liberando o objeto
$word = null;
?>
```

**Exemplo #2 Exemplo de com (2)**

```
<?php

$conn = new com("ADODB.Connection") or die("Não foi possível iniciar o ADO");
$conn->Open("Provider=SQLOLEDB; Data Source=localhost;
Initial Catalog=database; User ID=user; Password=password");

$rs = $conn->Execute("SELECT * FROM sometable");    // Conjunto de registros

$num_columns = $rs->Fields->Count();
echo $num_columns . "\n";

for ($i=0; $i < $num_columns; $i++) {
    $fld[$i] = $rs->Fields($i);
}

$rowcount = 0;
while (!$rs->EOF) {
    for ($i=0; $i < $num_columns; $i++) {
        echo $fld[$i]->value . "\t";
    }
    echo "\n";
    $rowcount++;            // incrementa a contagem de linhas
    $rs->MoveNext();
}

$rs->Close();
$conn->Close();

$rs = null;
$conn = null;

?>
```

## Índice

- [com::\_\_construct](com.construct.md) — Construtor da classe com

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
