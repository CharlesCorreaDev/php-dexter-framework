# Redirecionamentos de funções do WinCache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.reroutes.php

---

## Redirecionamentos de funções do WinCache

*NOTA:* [wincache.rerouteini](wincache.configuration.md#ini.wincache.rerouteini) foi removida a partir do
WinCache 1.3.7.0. Ela foi substituída por redirecionamentos de função automática. Consulte:
[wincache.reroute\_enabled](wincache.configuration.md#ini.wincache.reroute_enabled).

As funções de redirecionamento do WinCache (disponíveis desde o WinCache 1.2.0, removidas desde o WinCache 1.3.7.0) podem ser usadas para substituir funções PHP integradas por suas equivalentes
que são otimizadas para uma finalidade específica. A extensão WinCache inclui uma implementação otimizada para Windows de funções de arquivo PHP que
podem melhorar o desempenho de aplicativos PHP nos casos em que o PHP precisa acessar arquivos em compartilhamentos de rede. A implementação otimizada é
fornecida para as seguintes funções:

- [file\_exists](function.file-exists.md)
- [file\_get\_contents](function.file-get-contents.md)
- [readfile](function.readfile.md)
- [is\_readable](function.is-readable.md)
- [is\_writable](function.is-writable.md)
- [is\_dir](function.is-dir.md)
- [realpath](function.realpath.md)
- [filesize](function.filesize.md)

Para configurar o WinCache para usar as funções de redirecionamento, utilize o arquivo reroute.ini incluído no
pacote de instalação do WinCache. Copie este arquivo para o mesmo diretório onde o arquivo php.ini
está localizado. Em seguida, adicione a configuração wincache.rerouteini em php.ini
e especifique um caminho absoluto ou relativo para o arquivo reroute.ini.

**Exemplo #1 Habilitando redirecionamentos de funções do WinCache**

```
wincache.rerouteini = C:\PHP\reroute.ini
```

> **Nota**:
>
> Se os redirecionamentos das funções do WinCache estiverem habilitados, é recomendável aumentar o tamanho do cache do arquivo WinCache.
> Isso pode ser feito usando a configuração [wincache.fcachesize](wincache.configuration.md#ini.wincache.fcachesize).

O arquivo reroute.ini contém os mapeamentos entre as funções nativas do PHP e
seus equivalentes no WinCache. Cada linha do arquivo define um mapeamento usando a seguinte sintaxe:

`<Nome da função PHP>:[<número de parâmetros da função>]=<nome da função wincache>`

O exemplo do arquivo é mostrado abaixo. Neste exemplo, as chamadas para a função PHP [file\_get\_contents()](function.file-get-contents.md)
serão substituídas por chamadas para **wincache\_file\_get\_contents()** somente se o número de parâmetros passados ​​para
a função for menor ou igual a 2. Especificar o número de parâmetros é útil quando a função de substituição
não lida com todos os parâmetros da função.

**Exemplo #2 Conteúdo do arquivo reroute.ini**

```
[FunctionRerouteList]
file_exists=wincache_file_exists
file_get_contents:2=wincache_file_get_contents
readfile:2=wincache_readfile
is_readable=wincache_is_readable
is_writable=wincache_is_writable
is_writeable=wincache_is_writable
is_file=wincache_is_file
is_dir=wincache_is_dir
realpath=wincache_realpath
filesize=wincache_filesize
```

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
