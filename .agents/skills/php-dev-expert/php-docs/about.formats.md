# Formatos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.formats.php

---

## Formatos

O manual PHP é disponibilizado em diversos formatos. Estes formatos podem ser divididos
em dois grupos: formatos de leitura online e pacotes para download.

> **Nota**:
>
> Algumas editoras fizeram versões impressas deste manual. Porém estas versões não
> são recomendadas, pois tendem a se tornar rapidamente
> desatualizadas.

O manual PHP pode ser lido online no [» site do PHP.net](https://www.php.net/).
A versão online do manual PHP tem atualmente duas
folhas de estilo CSS, uma web amigável e a outra folha de estilo para impressão.

Duas vantagens notáveis do manual online sobre a maioria dos formatos offline é a
integração das [notas dos
usuários](about.notes.md) e os [» atalhos de URL](https://www.php.net/urlhowto.php) que
podem ser usados para ir rapidamente para partes desejadas do manual. Uma óbvia desvantagem é
o requisito de estar online para visualização desta edição do manual.

Existem diversos formatos offline do manual, e o formato mais adequado
depende do sistema operacional e do
estilo de leitura pessoal. Para informações de como o manual é gerado em tantos
formatos, veja a seção [Como os
formatos são gerados](about.generate.md) deste apêndice.

A versão HTML é o formato mais multi-plataforma deste manual. Esta versão
está disponível como um único arquivo HTML e como um pacote de arquivos individuais
para cada seção (que resulta em uma coleção de milhares de arquivos).
Nós disponibilizamos estas versões compactadas, então um programa de descompactação é
necessário para recuperar os arquivos contidos dentro destes pacotes.

Para plataformas Windows, a versão Windows HTML Help
do manual otimiza o formato HTML para o uso com o programa
Windows HTML Help. Esta
versão fornece busca de textos, índice completo e marcadores. Vários
ambientes de desenvolvimento populares do PHP no Windows se integram com
esse formato da documentação para facilitar o acesso à documentação. Visualizadores de CHM para
desktops Linux também estão disponíveis. Veja
[» xCHM](https://xchm.sourceforge.net/) ou
[» GnoCHM](https://gnochm.sourceforge.net/).

Existe também uma [» versão CHM estendida](https://www.php.net/docs-echm.php)
disponível, que é atualizada menos frequentemente, mas que oferece muitos recursos
adicionais. Entretanto ela irá funcionar apenas no Microsoft Windows,
devido às tecnologias usadas para compilar as páginas de ajuda.

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
