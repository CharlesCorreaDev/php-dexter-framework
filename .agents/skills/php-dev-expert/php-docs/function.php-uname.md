# Retorna informações sobre o sistema operacional em que o PHP está sendo executado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.php-uname.php

---

# php\_uname

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

php\_uname — Retorna informações sobre o sistema operacional em que o PHP está sendo executado

### Descrição

function **php\_uname**([string](language.types.string.md) `$mode` = "a"): [string](language.types.string.md)

**php\_uname()** retorna uma descrição do sistema
operacional em que o PHP está sendo executado. Esta é a mesma string que você vê no
topo da saída de [phpinfo()](function.phpinfo.md). Para o nome apenas do sistema
operacional, considere usar a constante **`PHP_OS`**,
mas tenha em mente que esta constante conterá o sistema
operacional no qual o PHP foi *construído*.

Em algumas plataformas UNIX mais antigas, pode não ser possível determinar as
informações atuais do sistema operacional e, nesse caso, a função reverterá para a exibição
do sistema operacional no qual o PHP foi construído. Isso só acontecerá se a chamada da
biblioteca uname() não existir ou não funcionar.

### Parâmetros

`mode`
:   `mode` é um único caractere que define quais
    informações são retornadas:

    - `'a'`: É o padrão. Retorna a mesma
      informação que os modos individuais
      `'s'`, `'n'`, `'r'`, `'v'`, `'m'`
      separados por espaços.
    - `'s'`: Nome do sistema operacional. Ex:
      `FreeBSD`.
    - `'n'`: Nome do servidor. Ex.:
      `localhost.example.com`.
    - `'r'`: Nome da distribuição. Ex.:
      `5.1.2-RELEASE`.
    - `'v'`: Informação de versão. Varia muito entre
      sistemas operacionais.
    - `'m'`: Tipo de máquina. Ex.: `i386`.

### Valor Retornado

Retorna a descrição, como uma string.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Lança um [ValueError](class.valueerror.md) quando um `mode` inválido for especificado. |

### Examples

**Exemplo #1 Alguns exemplos de **php\_uname()****

```
<?php
echo php_uname();
echo PHP_OS;

/* Alguns resultados possíveis:
Linux localhost 2.4.21-0.13mdk #1 Fri Mar 14 15:08:06 EST 2003 i686
Linux

FreeBSD localhost 3.2-RELEASE #15: Mon Dec 17 08:46:02 GMT 2001
FreeBSD

Windows NT XN1 5.1 build 2600
WINNT
*/

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'Este é um servidor que usa Windows!';
} else {
    echo 'Este é um servidor que não usa Windows!';
}

?>
```

Também existem algumas [Constantes Predefinidas do PHP](language.constants.predefined.md) relacionadas que podem ser úteis, por exemplo:

**Exemplo #2 Exemplos de algumas constantes relacionadas a sistema operacional**

```
<?php
// *nix
echo DIRECTORY_SEPARATOR; // /
echo PHP_SHLIB_SUFFIX;    // so
echo PATH_SEPARATOR;      // :

// Win*
echo DIRECTORY_SEPARATOR; // \
echo PHP_SHLIB_SUFFIX;    // dll
echo PATH_SEPARATOR;      // ;
?>
```

### Veja também

- [phpversion()](function.phpversion.md) - Obtém a versão atual do PHP
- [php\_sapi\_name()](function.php-sapi-name.md) - Retorna o tipo de interface entre o servidor web e o PHP
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP

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
