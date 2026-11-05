# Versões do PHP documentadas neste manual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.phpversions.php

---

## Versões do PHP documentadas neste manual

O manual contém informações sobre as versões passadas, presente, e futuras
do PHP. Modificações no comportamento são documentadas como notas, changelogs e em
trechos nas páginas do manual.
A versão mais antiga documentada é o PHP 7.0.0.

Quando a documentação existir para versões mais recentes de desenvolvimento (unreleased)
do PHP, será marcada como "available in Git" ou "development
version". E, embora estas mudanças sejam planejadas, em casos raros elas
podem mudar.

Todo desenvolvimento ocorre no Git e o check out pode ser feito como descrito na
página [» acesso anônimo ao Git](https://www.php.net/git.php).

E para esclarecer, o manual refere-se a maiores, menores e específicas releases do PHP.
Usando o PHP `7.3.1` como exemplo, o *7*
refere-se à versão maior, *3* à menor e
*1* é a release específica. Tipicamente o PHP somente adiciona novas features
em maiores e menores releases, e corrige bugs em releases específicas. Porém, esta
convenção nem sempre é verdadeira.

Observe também que o manual PHP é escrito no tempo presente, e não no futuro,
mesmo que para recursos documentados que ainda não estão disponíveis. A razão para isto
é que o manual pode resistir ao teste do tempo, portanto não exige tediosas
atualizações gramaticais a cada nova release do PHP.

Muitas vezes o manual do PHP lista "Valores Padrão" para as diretivas do PHP. Estes
valores são baseados em como o PHP se comporta sem um arquivo de configuração php.ini,
então podem ser diferentes dos valores encontrados nos arquivos
php.ini-development e php.ini-production
distribuídos. Eles também referem-se à última versão do PHP, embora entradas do changelog
mencionem valores anteriores. Veja o [Apêndice Diretivas do PHP](ini.list.md) para detalhes a respeito destes valores e mudanças.

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
