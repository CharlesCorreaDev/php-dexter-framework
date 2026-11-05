# Captura uma janela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegrabwindow.php

---

# imagegrabwindow

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

imagegrabwindow — Captura uma janela

### Descrição

function **imagegrabwindow**([int](language.types.integer.md) `$handle`, [bool](language.types.boolean.md) `$client_area` = **`false`**): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Captura uma janela ou sua área de cliente usando um manipulador do Windows (propriedade HWND na instância COM)

> **Nota**:
>
> Esta função está disponível apenas no Windows.

### Parâmetros

`handle`
:   O ID da janela HWND.

`client_area`
:   Inclui a área de cliente da janela da aplicação.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de falha.

### Erros/Exceções

E\_NOTICE é emitido se `handle` for um
manipulador de janela inválido.
E\_WARNING é emitido se a API do Windows for muito antiga.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna agora uma instância de [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | `client_area` agora espera um valor do tipo [bool](language.types.boolean.md); anteriormente era esperado um valor do tipo [int](language.types.integer.md). |

### Examples

**Exemplo #1 Exemplo de **imagegrabwindow()****

Captura uma janela (IE por exemplo)

```
<?php
$browser = new COM("InternetExplorer.Application");
$handle = $browser->HWND;
$browser->Visible = true;
$im = imagegrabwindow($handle);
$browser->Quit();
imagepng($im, "iesnap.png");
?>
```

Captura uma janela (IE por exemplo) mas com seu conteúdo

```
<?php
$browser = new COM("InternetExplorer.Application");
$handle = $browser->HWND;
$browser->Visible = true;
$browser->Navigate("http://www.libgd.org");

/* Ainda funcionando? */
while ($browser->Busy) {
    com_message_pump(4000);
}
$im = imagegrabwindow($handle, 0);
$browser->Quit();
imagepng($im, "iesnap.png");
?>
```

### Veja também

- [imagegrabscreen()](function.imagegrabscreen.md) - Captura toda a tela

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
