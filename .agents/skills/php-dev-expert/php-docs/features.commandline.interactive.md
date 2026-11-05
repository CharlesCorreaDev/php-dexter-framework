# Shell interativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.interactive.php

---

## Shell interativo

O CLI SAPI fornece um shell interativo usando a opção
**-a** se o PHP for compilado com a opção
**--with-readline**.
A partir do PHP 7.1.0 o shell interativo também está disponível no Windows, se a
extensão [readline](book.readline.md) estiver habilitada.

Usando o shell interativo você será capaz de escrever código PHP e
executá-lo diretamente.

**Exemplo #1 Executando código usando o shell interativo**

```
$ php -a
Interactive shell

php > echo 5+8;
13
php > function addTwo($n)
php > {
php { return $n + 2;
php { }
php > var_dump(addtwo(2));
int(4)
php >
```

O shell interativo também possui sugestões de complemento com tab para funções,
constantes, nomes de classes, variáveis, chamadas para métodos estáticos e constantes
de classe.

**Exemplo #2 Sugestões de complemento com tab**

Pressionar a tecla tab duas vezes quando tiver mais de uma sugestão de complemento
resultará numa lista desses complementos.

```
php > strp[TAB][TAB]
strpbrk   strpos    strptime
php > strp
```

Quando existir apenas um possível complemento, pressionar a tecla tab uma vez
irá completar o restante da mesma linha:

```
php > strpt[TAB]ime(
```

Complementos também funcionarão para nomes que forem definidos durante
a mesma sessão do shell interativo:

```
php > $fooThisIsAReallyLongVariableName = 42;
php > $foo[TAB]ThisIsAReallyLongVariableName
```

O shell interativo armazena seu histórico que pode ser acessado usando as
teclas para cima e para baixo. O histórico é salvo no arquivo
~/.php\_history.
A partir do PHP 8.4.0, o caminho para o arquivo de histórico pode ser definido usando a
variável de ambiente PHP\_HISTFILE.

O CLI SAPI fornece as configurações do
php.ini `cli.pager` e
`cli.prompt`. A configuração `cli.pager`
permite que um programa externo (como o less) aja como
uma alternativa para a saída ao invés dela ser exibida diretamente na tela.
A configuração `cli.prompt` faz com que seja possível alterar
a saída `php >`.

Também é possível definir configurações
php.ini no shell interativo usando uma notação abreviada.

**Exemplo #3 Definindo configurações php.ini no shell interativo**

A opção `cli.prompt`:

```
php > #cli.prompt=hello world :>
hello world :>
```

Usando acento grave é possível executar o PHP diretamente no terminal:

```
php > #cli.prompt=`echo date('H:i:s');` php >
15:49:35 php > echo 'hi';
hi
15:49:43 php > sleep(2);
15:49:45 php >
```

Setando o paginador paraless:

```
php > #cli.pager=less
php > phpinfo();
(output displayed in less)
php >
```

A configuração `cli.prompt` suporta algumas sequências de
escape:

**Sequências de escape do `cli.prompt`**

| Sequência | Descrição |
| --- | --- |
| `\e` | Usada para adicionar cores ao terminal. Um exemplo pode ser `\e[032m\v \e[031m\b \e[34m\> \e[0m` |
| `\v` | A versão do PHP. |
| `\b` | Indica em qual bloco o PHP está. Por exemplo `/*` irá indicar que o PHP está dentro de um comentário de múltiplas linhas. O escopo externo será denominado por `php`. |
| `\>` | Indica o caractere do terminal. Por padrão é `>`, mas pode alterar quando o shell estiver dentro de um bloco indeterminado ou de uma string. Possíveis caracteres são: `' " { ( >` |

> **Nota**:
>
> Arquivos incluídos através de [auto\_prepend\_file](ini.core.md#ini.auto-prepend-file) e [auto\_append\_file](ini.core.md#ini.auto-append-file) são interpretados
> nesse modo porém com algumas restrições - Exemplo: funções devem ser
> definidas antes de sua chamada.

## Modo interarativo

Se a extensão readline não estiver disponível, anteriormente ao PHP 8.1.0, chamar o CLI SAPI com a opção
**-a** fornecia o modo interativo. Nesse modo, um script
PHP completo deveria ser fornecido via STDIN, terminado por uma sequência
de
`CTRL
+D`
(POSIX) ou
`CTRL
+Z`
seguido de +`ENTER` (Windows), para que o script seja avaliado.
Isto é basicamente o mesmo que invocar CLI SAPI sem a opção **-a**.

A partir do PHP 8.1.0, chamar a CLI SAPI com a opção **-a**
falhará na ausência da extensão readline.

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
