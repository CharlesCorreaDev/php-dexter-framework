# Inicia uma nova página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-begin-page.php

---

# ps\_begin\_page

(PECL ps >= 1.1.0)

ps\_begin\_page — Inicia uma nova página

### Descrição

function **ps\_begin\_page**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$width`, [float](language.types.float.md) `$height`): [bool](language.types.boolean.md)

Inicia uma nova página. Embora os parâmetros `width`
e `height` impliquem um tamanho de página diferente para cada
página, isso não é possível em PostScript. A primeira chamada de
**ps\_begin\_page()** definirá o tamanho da página para todo o
documento. Chamadas consecutivas não terão efeito, exceto para criar uma nova
página. A situação é diferente se você pretende converter o documento PostScript
para PDF. Esta função insere marcas de PDF no documento,
que podem definir o tamanho de cada página individualmente. O documento PDF resultante terá
tamanhos de página diferentes.

Embora o PostScript não reconheça diferentes tamanhos de página, o pslib coloca
uma caixa delimitadora para cada página do documento. Este tamanho é avaliado
por alguns visualizadores PostScript e terá precedência sobre a BoundingBox
no cabeçalho do documento. Isso pode levar a resultados inesperados quando
se define uma BoundingBox cujo canto inferior esquerdo não é (0, 0), porque a
caixa delimitadora da página sempre terá um canto inferior esquerdo (0, 0)
e sobrescreve a configuração global.

Cada página é encapsulada em salvar/restaurar. Isso significa que a maioria das
configurações feitas em uma página não serão mantidas na página seguinte.

Se, até a primeira chamada de **ps\_begin\_page()**, não houver
nenhuma chamada de [ps\_findfont()](function.ps-findfont.md), o cabeçalho do documento PostScript
será exibido e a caixa delimitadora será definida para o tamanho
da primeira página. O canto inferior esquerdo da caixa delimitadora é definido como (0, 0).
Se [ps\_findfont()](function.ps-findfont.md) tiver sido chamado antes, o
cabeçalho já terá sido exibido e o documento não terá uma
caixa delimitadora válida. Para evitar isso, deve-se chamar
[ps\_set\_info()](function.ps-set-info.md) para definir o campo de informações
`BoundingBox` e possivelmente `Orientation`
antes de quaisquer chamadas de [ps\_findfont()](function.ps-findfont.md) ou
**ps\_begin\_page()**.

> **Nota**:
>
> Até a versão 0.2.6 do pslib, esta função sempre sobrescreverá
> o BoundingBox e a Orientation, caso tenha sido definida anteriormente com
> [ps\_set\_info()](function.ps-set-info.md) e [ps\_findfont()](function.ps-findfont.md)
> não tenha sido chamada anteriormente.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`width`
:   A largura da página em pixels, por exemplo, 596 para o formato A4.

`height`
:   A altura da página em pixels, por exemplo, 842 para o formato A4.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_end\_page()](function.ps-end-page.md) - Termina uma página
- [ps\_findfont()](function.ps-findfont.md) - Carrega uma fonte
- [ps\_set\_info()](function.ps-set-info.md) - Define campos de informação do documento

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
