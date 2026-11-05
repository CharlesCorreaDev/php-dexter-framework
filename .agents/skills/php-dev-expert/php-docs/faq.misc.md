# Questões Diversas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.misc.php

---

# Questões Diversas

Aqui estão algumas questões que nós não pudemos colocar
em outra categoria. Aqui você encontra elas.

1. [Como eu posso utilizar os manuais compactados com o bz2 no Windows?](#faq.misc.bz2)

**Como eu posso utilizar os manuais compactados com o bz2 no Windows?**
:   Se você não tiver uma ferramenta de arquivos para trabalhar com arquivos bz2
    [» download](https://www.sourceware.org/bzip2/) a ferramenta de linha de comando
    da Redhat (por favor veja maiores informações abaixo).

    Se você não gostar de usar uma ferramenta de linha de comando, você pode tentar ferramentas gratuitas como
    [» Stuffit Expander](https://www.stuffit.com/),
    [» UltimateZip](https://www.ultimatezip.com/),
    [» 7-Zip](https://www.7-zip.org/), ou
    [» Quick Zip](https://www.quickzip.org/). Se você tiver
    ferramentas como [» WinRAR](https://www.rarlab.com/) ou
    [» Power Archiver](https://www.powerarchiver.com/), você pode
    facilmente descomprimir arquivos bz2 com elas. Se você usa o Total Commander,
    (anteriormente Windows Commander),
    um plugin para o bz2 está disponível gratuitamente em
    [» Total Commander](https://www.ghisler.com/).

    A ferramenta de linha de comando bzip2 da Redhat:

    Usuários Win2k Sp2 obtenha a versão 1.0.2, todos os
    outros usuários de windows a versão 1.00. Após o download
    renomeie o executável para bzip2.exe. Para sua conveniência, coloque em um diretório
    que esteja no seu path, ex. C:\Windows, onde C representa o drive que você
    instalou o Windows.

    Nota: lang significa a sua língua( Português do Brasil: pt\_BR) e x para o formato desejado, ex.: pdf.
    Para descompactar php\_manual\_lang.x.bz2 siga estas instruções simples:

    - abra uma janela com o prompt de comando
    - Use o comando cd para a pasta onde você guardou
      o php\_manual\_lang.x.bz2
    - digite bzip2 -d php\_manual\_lang.x.bz2, descompactando
      php\_manual\_lang.x na mesma pasta

    Caso você tenha feito o download de php\_manual\_lang.tar.bz2 com vários arquivos html nele,
    o procedimento é o mesmo. A única diferença é que você obtém um arquivo
    php\_manual\_lang.tar. O formato tar format é conhecido e tratado com as ferramentas
    de arquivos mais comuns para o Windows, por exemplo
    [» WinZip](https://www.winzip.com/).

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
