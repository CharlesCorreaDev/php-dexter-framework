# Lista de opções de contexto de Zip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.zip.php

---

# Opções de contexto para Zip

Opções de contexto para Zip — Lista de opções de contexto de Zip

### Descrição

Opções de contexto para Zip estão disponíveis para empacotadores `zip`.

### Opções

`password`
:   Utilizado para especificar a senha definida para o arquivo criptografado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0, PECL zip 1.14.0 | Incluído o parâmetro `password`. |

### Examples

**Exemplo #1 Exemplo básico de uso de `password`**

```
<?php
// Ler o arquivo criptografado
$opts = array(
    'zip' => array(
        'password' => 'secret',
    ),
);
// criar o contexto...
$context = stream_context_create($opts);

// ...e usá-lo para obter os dados
echo file_get_contents('zip://test.zip#test.txt', false, $context);

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
