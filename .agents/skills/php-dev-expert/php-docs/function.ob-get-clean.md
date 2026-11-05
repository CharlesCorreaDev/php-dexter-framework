# Obtém o conteúdo do buffer de saída ativo e desliga-o

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-get-clean.php

---

# ob\_get\_clean

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ob\_get\_clean — Obtém o conteúdo do buffer de saída ativo e desliga-o

### Descrição

function **ob\_get\_clean**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função chama o manipulador de saída
(com as opções **`PHP_OUTPUT_HANDLER_CLEAN`** e
**`PHP_OUTPUT_HANDLER_FINAL`**),
descarta seu valor de retorno,
retorna o conteúdo do buffer de saída ativo
e desliga o mesmo.

**ob\_get\_clean()** irá falhar
sem um buffer de saída ativo iniciado com a opção
**`PHP_OUTPUT_HANDLER_REMOVABLE`**.

**ob\_get\_clean()**
irá descartar o conteúdo do buffer de saída ativo
mesmo se tiver sido iniciado sem a opção
**`PHP_OUTPUT_HANDLER_CLEANABLE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do buffer de saída ativo em caso de sucesso
ou **`false`** em caso de falha.

**Cuidado**

**ob\_get\_clean()** retornará false
mas não irá gerar um **`E_NOTICE`**
se não houver buffer de saída ativo.

### Erros/Exceções

Se a função falhar, ela gerará um **`E_NOTICE`**.

### Examples

**Exemplo #1 Um exemplo simples de **ob\_get\_clean()****

```
<?php

ob_start();

echo "Olá, Mundo!";

$out = ob_get_clean();
$out = strtolower($out);

var_dump($out);
?>
```

O exemplo acima produzirá:

```
string(11) "olá, mundo!"
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_clean()](function.ob-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo
- [ob\_end\_clean()](function.ob-end-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o
- [ob\_get\_flush()](function.ob-get-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo,
  retorna o conteúdo do buffer de saída ativo e desliga-o

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
