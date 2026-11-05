# Cria um novo conversor de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox-image-converter.construct.php

---

# wkhtmltox\Image\Converter::\_\_construct

(wkhtmltox >= 0.1.0)

wkhtmltox\Image\Converter::\_\_construct — Cria um novo conversor de imagem

### Descrição

public function **wkhtmltox\Image\Converter::\_\_construct**([string](language.types.string.md) `$buffer` = ?, [array](language.types.array.md) `$settings` = ?)

Cria um conversor de imagem, opcionalmente recebendo um buffer de entrada e definições de configuração.

### Parâmetros

`buffer`
:   HTML

`settings`
:   | Nome | Descrição | Valores | Registro de modificações |
    | --- | --- | --- | --- |
    | in | URL ou caminho do arquivo de entrada, se "-" stdin for usado | /path/to/markup.html | >= 0.1.0 |
    | out | caminho do arquivo de saída, se "-" stdout for usado, por padrão um buffer interno é usado | /path/to/output.png | >= 0.1.0 |
    | fmt | formato de saída a ser usado | |  |  | | --- | --- | | "" | padrão | | jpg | saída como JPEG | | png | saída como PNG | | bmp | saída como bitmap | | svg | saída como SVG | | >= 0.1.0 |
    | transparent | ao gerar um PNG ou SVG, torna o fundo branco transparente | boolean | >= 0.1.0 |
    | screenWidth | a largura da tela usada para renderizar em pixels | 800 | >= 0.1.0 |
    | smartWidth | quando true, screenWidth é expandido para a largura do conteúdo | boolean | >= 0.1.0 |
    | quality | fator de compressão a ser usado ao gerar uma imagem JPEG | 94 | >= 0.1.0 |
    | crop.left | coordenada esquerda/x da janela a ser capturada em pixels | 200 | >= 0.1.0 |
    | crop.top | coordenada superior/y da janela a ser capturada em pixels | 200 | >= 0.1.0 |
    | crop.width | largura da janela a ser capturada em pixels | 200 | >= 0.1.0 |
    | crop.height | altura da janela a ser capturada em pixels | 200 | >= 0.1.0 |
    | load.cookieJar | caminho do arquivo usado para carregar e armazenar cookies | /tmp/cookies.txt | >= 0.1.0 |
    | load.username | nome de usuário a ser usado ao fazer login em um site | bart | >= 0.1.0 |
    | load.password | a senha usada para acessar um site | elbarto | >= 0.1.0 |
    | load.jsdelay | o tempo em milissegundos que se espera após o carregamento de uma página até que ela seja capturada | 1200 | >= 0.1.0 |
    | load.zoomFactor | o nível de zoom que deve ser aplicado ao conteúdo | 2.2 | >= 0.1.0 |
    | load.customHeaders | cabeçalhos personalizados a serem enviados ao solicitar a página principal da web |  | >= 0.1.0 |
    | load.repertCustomHeaders | defina como true para enviar com todas as solicitações | boolean | >= 0.1.0 |
    | load.cookies | string de cookie a ser enviada ao solicitar a página principal da web |  | >= 0.1.0 |
    | load.post | String POST a ser enviada ao solicitar a página principal da web |  | >= 0.1.0 |
    | load.blockLocalFileAccess | impede que arquivos locais e arquivos encaminhados acessem outros arquivos locais. | boolean | >= 0.1.0 |
    | load.stopSlowScript | interrompe a execução de javascript lento | boolean |  |
    | load.debugJavascript | permite que o javascript gere avisos | boolean | >= 0.1.0 |
    | load.loadErrorHandling | define a estratégia de tratamento de erros | |  |  | | --- | --- | | abort | interrompe o processo de conversão | | skip | não adiciona o objeto à saída final | | ignore | tenta adicionar o objeto à saída final | | >= 0.1.0 |
    | load.proxy |  |  | >= 0.1.0 |
    | web.background | inclui imagem de fundo na saída | boolean | >= 0.1.0 |
    | web.loadImages | inclui imagens na saída | boolean | >= 0.1.0 |
    | web.enableJavascript | ativa ou desativa o javascript | boolean | >= 0.1.0 |
    | web.enableIntelligentShrinking | permite tentar ajustar mais conteúdo na página, aplicando-se apenas à saída em PDF | boolean | >= 0.1.0 |
    | web.minimumFontSize | o tamanho mínimo de fonte permitido | 9 | >= 0.1.0 |
    | web.printMediaType | imprime conteúdo usando mídia impressa em vez de mídia digital | boolean | >= 0.1.0 |
    | web.defaultEncoding | conteúdo a ser usado onde nenhuma codificação for especificada | utf-8 | >= 0.1.0 |
    | web.userStyleSheet | URL ou caminho para uma folha de estilo especificada pelo usuário | /path/to/style.css | >= 0.1.0 |
    | web.enablePlugins | ativa ou desativa plugins NS | boolean | >= 0.1.0 |

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
