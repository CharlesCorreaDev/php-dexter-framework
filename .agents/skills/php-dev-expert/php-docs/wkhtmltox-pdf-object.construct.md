# Criar um novo objeto PDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox-pdf-object.construct.php

---

# wkhtmltox\PDF\Object::\_\_construct

(wkhtmltox >= 0.1.0)

wkhtmltox\PDF\Object::\_\_construct — Criar um novo objeto PDF

### Descrição

public function **wkhtmltox\PDF\Object::\_\_construct**([string](language.types.string.md) `$buffer`, [array](language.types.array.md) `$settings` = ?)

Cria um novo objeto PDF a partir do buffer fornecido e das configurações opcionais.

### Parâmetros

`buffer`
:   HTML

`settings`
:   | Nome | Descrição | Valores | Registro de Modificações |
    | --- | --- | --- | --- |
    | page | URL ou caminho do HTML a ser convertido |  | >= 0.1.0 |
    | useExternalLinks | defina como true para converter links externos na entrada em links PDF externos na saída | booleano | >= 0.1.0 |
    | useLocalLinks | defina como true para converter links internos na entrada em links PDF internos na saída | booleano | >= 0.1.0 |
    | produceForms | defina como true para transformar formulários HTML em formulários PDF | booleano | >= 0.1.0 |
    | replacements | não documentado |  | >= 0.1.0 |
    | includeInOutline | defina como true para incluir seções deste objeto no esboço e no sumário | booleano | >= 0.1.0 |
    | pagesCount | defina como true para fazer a contagem de páginas no sumário, incluindo o número de páginas neste objeto | booleano | >= 0.1.0 |
    | tocXsl | defina como folha de estilo para converter este objeto em um objeto de sumário |  | >= 0.1.0 |
    | toc.useDottedLines | defina como true para usar linhas pontilhadas no sumário | booleano | >= 0.1.0 |
    | toc.captionText | o texto da legenda para o sumário |  | >= 0.1.0 |
    | toc.forwardLinks | defina como true para criar links do sumário para o conteúdo | booleano | >= 0.1.0 |
    | toc.backLinks | defina como true para criar links do conteúdo para o sumário | booleano | >= 0.1.0 |
    | toc.indentation | recuo para o sumário | 2em | >= 0.1.0 |
    | toc.fontScale | o fator para reduzir a fonte em cada nível do sumário | 0.8 | >= 0.1.0 |
    | header.fontSize | tamanho da fonte para uso no cabeçalho | 13 | >= 0.1.0 |
    | header.fontName | nome da fonte para uso no cabeçalho | times | >= 0.1.0 |
    | header.left | texto à esquerda do cabeçalho |  | >= 0.1.0 |
    | header.center | texto no centro do cabeçalho |  | >= 0.1.0 |
    | header.right | texto à direita do cabeçalho |  | >= 0.1.0 |
    | header.line | habilita ou desabilita a regra horizontal sob o cabeçalho | booleano | >= 0.1.0 |
    | header.spacing | espaço entre o cabeçalho e o conteúdo | 1.8 | >= 0.1.0 |
    | header.htmlUrl | URL ou caminho do HTML a ser usado no cabeçalho |  | >= 0.1.0 |
    | footer.fontSize | tamanho da fonte para uso no rodapé | 13 | >= 0.1.0 |
    | footer.fontName | nome da fonte para uso no rodapé | times | >= 0.1.0 |
    | footer.left | texto à esquerda do rodapé |  | >= 0.1.0 |
    | footer.center | texto no centro do rodapé |  | >= 0.1.0 |
    | footer.right | texto à direita do rodapé |  | >= 0.1.0 |
    | footer.line | habilita ou desabilita a régua horizontal sob o rodapé | booleano | >= 0.1.0 |
    | footer.spacing | espaço entre o rodapé e o conteúdo | 1.8 | >= 0.1.0 |
    | footer.htmlUrl | URL ou caminho do HTML para usar no rodapé |  | >= 0.1.0 |
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
