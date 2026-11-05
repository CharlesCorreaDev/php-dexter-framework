# Obtém a versão atual do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpversion.php

---

# phpversion

(PHP 4, PHP 5, PHP 7, PHP 8)

phpversion — Obtém a versão atual do PHP

### Descrição

function **phpversion**([?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string contendo a versão do interpretador ou extensão do PHP
atualmente em execução.

### Parâmetros

`extension`
:   Um nome de extensão opcional.

### Valor Retornado

Retorna a versão atual do PHP como uma [string](language.types.string.md).
Se um argumento [string](language.types.string.md) for fornecido para
o parâmetro `extension`, **phpversion()**
retornará a versão dessa extensão, ou **`false`** se não houver informações
de versão associadas ou se a extensão não estiver habilitada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `extension` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **phpversion()****

```
<?php

// mostra por exemplo 'Versão atual do PHP: 8.3.12'
echo 'Versão atual do PHP: ' . phpversion();

// mostra por exemplo '1.22.3' ou nada se a extensão não estiver habilitada
echo phpversion('zip');

?>
```

**Exemplo #2 Exemplo e uso de **`PHP_VERSION_ID`****

```
<?php

/**
 * PHP_VERSION_ID é definida como um número, onde quanto mais alto ele
 * for, mais recente é a versão do PHP usada. É definida de acordo com a expressão
 * abaixo:
 *
 * $id_versao = $versao_principal * 10000 + $versao_secundaria * 100 + $versao_distribuicao;
 *
 * Com PHP_VERSION_ID, pode-se procurar por recursos que esta versão do PHP
 * possa ter, e não é necessário usar version_compare() toda vez
 * para verificar se a versão atual do PHP pode ou não suportar um recurso.
 *
 * Por exemplo, pode-se definir aqui as constantes PHP_*_VERSION que
 * não estão disponíveis em versões anteriores à 5.2.7
 */

if (PHP_VERSION_ID < 50207) {
    define('PHP_MAJOR_VERSION',   $version[0]);
    define('PHP_MINOR_VERSION',   $version[1]);
    define('PHP_RELEASE_VERSION', $version[2]);

    // e assim por diante, ...
}

?>
```

### Notas

> **Nota**:
>
> Esta informação também está disponível na constante predefinida
> **`PHP_VERSION`**. Mais informações sobre
> versionamento estão disponíveis usando as constantes
> **`PHP_*_VERSION`**.

> **Nota**:
>
> Algumas extensões podem definir seu próprio número de versão.
> No entanto, a maioria das extensões incluídas usará a versão do PHP como número de versão.

### Veja também

- [Constantes PHP\_VERSION](reserved.constants.md#reserved.constants.core)
- [version\_compare()](function.version-compare.md) - Compara duas strings de número de versão no "padrão PHP"
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP
- [phpcredits()](function.phpcredits.md) - Mostra os créditos para o PHP
- [zend\_version()](function.zend-version.md) - Obtém a versão do motor Zend atual

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
