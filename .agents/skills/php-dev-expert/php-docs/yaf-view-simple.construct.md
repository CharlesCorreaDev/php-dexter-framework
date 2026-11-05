# Construtor de Yaf_View_Simple

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.construct.php

---

# Yaf\_View\_Simple::\_\_construct

(Yaf >=1.0.0)

Yaf\_View\_Simple::\_\_construct — Construtor de Yaf\_View\_Simple

### Descrição

final public function **Yaf\_View\_Simple::\_\_construct**([string](language.types.string.md) `$template_dir`, [array](language.types.array.md) `$options` = ?)

### Parâmetros

`template_dir`
:   O diretório base dos modelos. Por padrão,
    é APPLICATOIN . "/views" para o Yaf.

`options`
:   ```
    Opções para o mecanismo. A partir do Yaf 2.1.13, a notação abreviada "<?=$var?>"
          pode ser usada no modelo (independente da configuração de "short_open_tag").
          Existe uma opção de nome "short_tag" no Yaf, que pode ser desligada
          para evitar o uso de notação abreviada no modelo.
    ```

### Examples

**Exemplo #1 Exemplo de **Yaf\_View\_Simple::\_\_construct()****

```
<?php
   define ("TEMPLATE_DIRECTORY", APPLICATOIN_PATH . '/views');
   $view = new Yaf_View_Simple(TEMPLATE_DIRECTORY, array(
                           'short_tag' => false // não permite uso de notação abreviada no modelo
   ));
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
