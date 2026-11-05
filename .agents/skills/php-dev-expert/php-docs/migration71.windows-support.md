# Suporte ao Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.windows-support.php

---

## Suporte ao Windows

### Suporte a caminhos longos e codificados em UTF-8

Se uma aplicação web for UTF-8, nenhuma ação adicional é necessária. Para
aplicações que dependam de caminhos em codificações que não sejam UTF-8 para E/S, uma
diretiva INI explícita precisa ser definida. A verificação de configuração INI para codificação
é baseada na seguinte ordem:

- internal\_encoding
- default\_charset
- zend.multibyte

Várias funções para manipulação de página de código foram introduzidas:

- sapi\_windows\_cp\_set() para definir a página de código padrão
- sapi\_windows\_cp\_get() para obter a página de código atual
- sapi\_windows\_cp\_is\_utf8() para verificar se a página de código é UTF-8
- sapi\_windows\_cp\_conv() para converter entre páginas de código, usando assinatura compatível com iconv()

Estas funções são seguras para threads.

A página de códigos de saída do console é ajustada dependendo da codificação usada no
PHP. Dependendo da página real de códigos OEM do sistema, a saída visível
pode ou não estar correta. Por exemplo, no cmd.exe padrão e em um
sistema com a página de códigos OEM 437, as saídas nas páginas de códigos 1251, 1252, 1253
e algumas outras podem ser mostradas corretamente ao usar UTF-8. No mesmo sistema,
caracteres na página de códigos como 20932 provavelmente não serão mostrados corretamente.
Isso se refere às regras específicas do sistema para página de código, compatibilidade de fontes e ao
programa de console específico usado. O PHP define automaticamente a página de códigos
do console de acordo com as regras de codificação do php.ini. Usar consoles alternativos
em vez de cmd.exe diretamente pode trazer uma experiência melhor em alguns casos.

No entanto, esteja ciente de que a troca de página de código em tempo de execução após o início da solicitação
pode trazer efeitos colaterais inesperados no CLI. A forma preferível é o php.ini.
Quando o PHP CLI é usado em um emulador de console, que não suporta Unicode,
isto pode ser necessário, para evitar a alteração da página de códigos do console. A
melhor maneira de conseguir isso é definindo a codificação padrão ou interna para
corresponder à página de códigos ANSI. Outro método é definir as diretivas INI
output\_encoding e input\_encoding para a página de código necessária; nesse caso,
entretanto, a diferença entre a página de código interna e de E/S provavelmente causará
mojibake. Em casos raros, se o PHP falhar normalmente, a página de códigos original
do console poderá não ser restaurada. Neste caso, o comando chcp
pode ser usado para restaurá-lo manualmente.

Atenção especial para os sistemas DBCS - a mudança da página de código no tempo de execução
usando [ini\_set()](function.ini-set.md) provavelmente causará problemas de exibição. A diferença para os
sistemas não DBCS é que os caracteres estendidos exigem que duas células do console
sejam exibidas. Em certos casos, apenas o mapeamento dos caracteres no
conjunto de glifos da fonte poderia acontecer, sem nenhuma alteração real da fonte. Esta é a
natureza dos sistemas DBCS, a maneira mais simples de evitar problemas de exibição é
evitar o uso de [ini\_set()](function.ini-set.md) para a alteração da página de código.

Como resultado do suporte UTF-8 nos fluxos, os scripts PHP não estão mais limitados
a nomes de arquivos ASCII ou ANSI. Isso é diretamente compatível com o CLI.
Para outros SAPI, a documentação do servidor correspondente
é útil.

O suporte a caminhos longos é transparente. Caminhos com mais de 260 bytes são
automaticamente prefixados com `\\?\`. O comprimento máximo do caminho é limitado a
2.048 bytes. Esteja ciente de que o limite do segmento do caminho (comprimento do nome base) ainda
persiste.

Para a melhor portabilidade, é altamente recomendável gerenciar nomes de arquivos,
E/S e outros tópicos relacionados com UTF-8. Além disso, para aplicativos de console,
o uso de uma fonte TrueType é preferível e o uso de ini\_set() para
a troca da página de códigos é desencorajado.

### readline

A [extensão readline](book.readline.md) é suportada
através da [» biblioteca
WinEditLine](https://mingweditline.sourceforge.net/). Assim, o shell CLI interativo é
também é suportado (`php.exe -a`).

### PHP\_FCGI\_CHILDREN

PHP\_FCGI\_CHILDREN agora é respeitado. Se esta variável de ambiente for
definida, o primeiro processo php-cgi.exe executará o número
especificado de filhos. Eles compartilharão o mesmo soquete TCP.

### ftok()

Adicionado suporte para [ftok()](function.ftok.md)

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
