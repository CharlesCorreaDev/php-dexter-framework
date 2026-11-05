# Executando o PHP em linha de comando em sistemas Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.windows.commandline.php

---

## Executando o PHP em linha de comando em sistemas Windows

Esta seção contém notas e dicas específicas para que o PHP
seja executado da linha de comando do Windows.

> **Nota**:
>
> Leia os [passos de
> instalação manual](install.windows.manual.md) primeiro!

Configurar o PHP para ser executado da linha de comando pode ser feito sem
nenhuma mudança no Windows.

```
C:\php\php.exe -f "C:\PHP Scripts\script.php" -- -arg1 -arg2 -arg3
```

Porém há alguns passos fáceis que podem ser seguidos para tornar o processo mais simples.
Alguns desses passos podem já ter sido executados, mas estão repetidos aqui
para fornecer uma sequência completa, passo a passo.

> **Nota**:
>
> PATH e PATHEXT são variáveis importantes
> de sistema pré-existentes no Windows,
> e deve-se tomar cuidado para não sobrescrever nenhuma das duas,
> apenas concatenar valores.

- Concatene a localização do executável do PHP (php.exe,
  php-win.exe ou php-cli.exe
  dependendo da versão do PHP e preferências de visualização) à variável
  de ambiente PATH. Leia mais sobre como adicionar
  a pasta do PHP à variável PATH na [entrada FAQ correspondente](faq.installation.md#faq.installation.addtopath).
- Adicione a extensão `.PHP` à variável de
  ambiente PATHEXT. Isto pode ser feito
  ao mesmo tempo que se adiciona à variável PATH.
  Siga os mesmos passos descritos no [FAQ](faq.installation.md#faq.installation.addtopath) mas adicione à variável
  PATHEXT no lugar da variável
  PATH.
  > **Nota**:
  >
  > A posição onde a extensão `.PHP` for inserida irá
  > determinar qual script ou programa será executado quando o nome do arquivo
  > for especificado. Por exemplo, inserir `.PHP` antes de
  > `.BAT` irá fazer com que o script seja executado, em vez
  > do arquivo de lote, se existir um arquivo de lote com o mesmo nome.
- Associe a extensão `.PHP` com o tipo de arquivo. Isto
  pode ser feito executando o seguinte comando:

  ```
  assoc .php=phpfile
  ```
- Associe o tipo de arquivo `phpfile` com o executável PHP
  apropriado. Isto pode ser feito executando o seguinte comando:

  ```
  ftype phpfile="C:\php\php.exe" -f "%1" -- %~2
  ```

Seguir estes passos irá permitir que os scripts PHP sejam executados de qualquer pasta
sem a necessidade de digitar o executável PHP ou a extensão
`.PHP` e todos os parâmetros serão fornecidos ao script para processamento.

O exemplo abaixo detalha algumas das alterações de registro que podem ser realizadas manualmente.

**Exemplo #1 Alterações de Registro**

```
Windows Registry Editor Version 5.00

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\.php]
@="phpfile"
"Content Type"="application/php"

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile]
@="PHP Script"
"EditFlags"=dword:00000000
"BrowserFlags"=dword:00000008
"AlwaysShowExt"=""

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\DefaultIcon]
@="C:\\php\\php-win.exe,0"

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\shell]
@="Open"

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\shell\Open]
@="&Open"

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\shell\Open\command]
@="\"C:\\php\\php.exe\" -f \"%1\" -- %~2"
```

Com estas alterações o mesmo comando pode ser escrito como:

```
"C:\PHP Scripts\script" -arg1 -arg2 -arg3
```

ou, se o diretório `"C:\PHP Scripts"` estiver na
variável de ambiente PATH:

```
script -arg1 -arg2 -arg3
```

> **Nota**:
>
> Existe um pequeno problema se a intenção for usar esta técnica e usar
> os scripts PHP como um filtro de linha de comando, como o exemplo abaixo:
>
> ```
> dir | "C:\PHP Scripts\script" -arg1 -arg2 -arg3
> ```
>
> ou
>
> ```
> dir | script -arg1 -arg2 -arg3
> ```
>
> Neste caso, o script poderá simplesmente travar e não produzir nenhuma saída.
> Para tornar esta opção operacional, deve-se fazer uma outra alteração no registro.
>
> ```
> Windows Registry Editor Version 5.00
>
> [HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\policies\Explorer]
> "InheritConsoleHandles"=dword:00000001
> ```
>
> Mais informações sobre este problema podem ser encontradas no Microsoft
> Knowledgebase Article 321788.
> A partir do Windows 10, esta configuração foi invertida, fazendo com que a instalação padrão do
> Windows 10 suporte automaticamente esta opção.

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
