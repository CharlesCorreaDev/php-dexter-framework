# Retorna a documentação para o nome da opção fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.getoptdoc.php

---

# tidy::getOptDoc

# tidy\_get\_opt\_doc

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

tidy::getOptDoc -- tidy\_get\_opt\_doc — 
Retorna a documentação para o nome da opção fornecida

### Descrição

Estilo orientado a objetos

public function **tidy::getOptDoc**([string](language.types.string.md) `$option`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **tidy\_get\_opt\_doc**([tidy](class.tidy.md) `$tidy`, [string](language.types.string.md) `$option`): [string](language.types.string.md)|[false](language.types.singleton.md)

**tidy\_get\_opt\_doc()** retorna a documentação para o
nome da opção fornecida.

> **Nota**:
>
> É necessário ter a libtidy a partir de 25 de abril de 2005 para que esta função esteja
> disponível.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

`option`
:   O nome da opção

### Valor Retornado

Retorna uma string se a opção existir e tiver documentação disponível, ou
**`false`** caso contrário.

### Examples

**Exemplo #1 Imprimindo todas as opções junto com sua documentação e valor padrão**

```
<?php

$tidy = new tidy;
$config = $tidy->getConfig();

ksort($config);

foreach ($config as $opt => $val) {

    if (!$doc = $tidy->getOptDoc($opt))
        $doc = 'no documentation available!';

    $val = ($tidy->getOpt($opt) === true)  ? 'true'  : $val;
    $val = ($tidy->getOpt($opt) === false) ? 'false' : $val;

    echo "<p><b>$opt</b> (default: '$val')<br />".
         "$doc</p><hr />\n";
}

?>
```

### Veja também

- [tidy::getConfig()](tidy.getconfig.md) - Obtém a configuração atual do Tidy
- [tidy::getOpt()](tidy.getopt.md) - Retorna o valor da opção de configuração especificada para o documento tidy

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
