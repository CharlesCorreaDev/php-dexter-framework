# Criar um novo conversor de PDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox-pdf-converter.construct.php

---

# wkhtmltox\PDF\Converter::\_\_construct

(wkhtmltox >= 0.1.0)

wkhtmltox\PDF\Converter::\_\_construct — Criar um novo conversor de PDF

### Descrição

public function **wkhtmltox\PDF\Converter::\_\_construct**([array](language.types.array.md) `$settings` = ?)

Cria um conversor de PDF, usando configurações opcionais.

### Parâmetros

`settings`
:   | Nome | Descrição | Valores | Registro de modificações |
    | --- | --- | --- | --- |
    | size.pageSize | tamanho do papel do documento de saída | A4 | >= 0.1.0 |
    | size.width | largura do documento de saída | 210mm | >= 0.1.0 |
    | size.height | altura do documento de saída | 297mm | >= 0.1.0 |
    | orientation | orientação do documento de saída | |  | | --- | | Paisagem | | Retrato | | >= 0.1.0 |
    | colorMode | modo de cor do documento de saída | |  | | --- | | Colorido | | Escala de cinza | | >= 0.1.0 |
    | resolution | resolução do documento de saída | provavelmente não tem efeito | >= 0.1.0 |
    | dpi | ppp (pontos por polegada) para usar durante a impressão | 80 | >= 0.1.0 |
    | pageOffset | inteiro adicionado aos números de página gerando cabeçalhos, rodapés e sumário |  | >= 0.1.0 |
    | copies |  |  | >= 0.1.0 |
    | collate | cópias agrupadas | booleano | >= 0.1.0 |
    | outline | gera estrutura de tópicos do PDF | booleano | >= 0.1.0 |
    | outlineDepth | profundidade máxima da estrutura de tópicos |  | >= 0.1.0 |
    | dumpOutline | caminho do arquivo para despejar o XML de estrutura de tópicos |  | >= 0.1.0 |
    | out | caminho do arquivo de saída, se o stdout "-" for usado |  | >= 0.1.0 |
    | documentTitle | título para o documento de saída |  | >= 0.1.0 |
    | useCompression | habilita ou desabilita a compressão sem perdas | boolean | >= 0.1.0 |
    | margin.top | tamanho da margem superior | 2cm | >= 0.1.0 |
    | margin.bottom | tamanho da margem inferior | 2cm | >= 0.1.0 |
    | margin.left | tamanho da margem esquerda | 2cm | >= 0.1.0 |
    | margin.right | tamanho da margem direita | 2cm | >= 0.1.0 |
    | imageDPI | PPP máximo para imagens no documento de saída |  | >= 0.1.0 |
    | imageQuality | o fator de compressão JPEG para imagens no documento de saída | 94 | >= 0.1.0 |
    | load.cookieJar | caminho do arquivo usado para carregar e armazenar cookies | /tmp/cookies.txt | >= 0.1.0 |

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
