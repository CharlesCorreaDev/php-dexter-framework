# Inicializa uma conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-init.php

---

# gnupg\_init

(PECL gnupg >= 0.4)

gnupg\_init — Inicializa uma conexão

### Descrição

function **gnupg\_init**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [resource](language.types.resource.md)

### Parâmetros

`options`
:   Deve ser um array associativo. É usado para alterar a configuração padrão
    do mecanismo de criptografia.

    **Substituições de configuração**

    | chave | tipo | descrição |
    | --- | --- | --- |
    | file\_name | [string](language.types.string.md) | É o nome do arquivo do programa executável que implementa este protocolo que geralmente é o caminho do executável `gpg`. |
    | home\_dir | [string](language.types.string.md) | É o nome do diretório de configuração. Ele também substitui a variável de ambiente `GNUPGHOME` que é usada para o mesmo propósito. |

### Valor Retornado

Uma conexão do GnuPG do tipo [resource](language.types.resource.md) usada por outras funções do GnuPG.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL gnupg 1.5.0 | O parâmetro `options` foi adicionado. |

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_init()** com configuração padrão**

```
<?php
$res = gnupg_init();
?>
```

**Exemplo #2 Exemplo procedural de **gnupg\_init()** com nome de arquivo e diretório inicial alterados**

```
<?php
$res = gnupg_init(["file_name" => "/usr/bin/gpg2", "home_dir" => "/var/www/.gnupg"]);
?>
```

**Exemplo #3 Exemplo orientado a objeto de inicializador gnupg initializer com configuração padrão**

```
<?php
$gpg = new gnupg();
?>
```

**Exemplo #4 Exemplo orientado a objeto de inicializador gnupg com nome de arquivo e diretório inicial alterados**

```
<?php
$gpg = new gnupg(["file_name" => "/usr/bin/gpg2", "home_dir" => "/var/www/.gnupg"]);
?>
```

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
