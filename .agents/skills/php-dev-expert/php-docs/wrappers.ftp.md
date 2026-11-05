# Acessando URLs FTP(s)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.ftp.php

---

# ftp://

# ftps://

ftp:// -- ftps:// — Acessando URLs FTP(s)

### Descrição

Permite acesso de leitura a arquivos existentes e criação de novos arquivos
via FTP. Se o servidor não suportar modo ftp passivo, a
conexão irá falhar.

Pode-se abrir arquivos tanto para leitura quanto para escrita, mas não para ambos
simultaneamente. Se o arquivo remoto já existir no servidor ftp
e houver tentativa de abri-lo para escrita, mas não estiver especificada
a opção de contexto `overwrite`, a conexão
irá falhar. Se for necessário sobrescrever os arquivos existentes via ftp,
deve-se especificar a opção `overwrite` no contexto
e abrir o arquivo para escrita. Alternativamente, pode ser usada
a [extensão FTP](ref.ftp.md).

Se estiver configurada a diretiva [from](filesystem.configuration.md#ini.from)
no php.ini, então este valor será enviado como a senha do
FTP anônimo.

### Uso

- ftp://example.com/pub/arquivo.txt
- ftp://usuario:senha@example.com/pub/arquivo.txt
- ftps://example.com/pub/arquivo.txt
- ftps://usuario:senha@example.com/pub/arquivo.txt

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Sim |
| Permite Leitura | Sim |
| Permite Escrita | Sim (arquivos novos/existentes com `overwrite`) |
| Permite Adição | Sim |
| Permite Leitura e Escrita Simultâneas | Não |
| Suporta [stat()](function.stat.md) | Somente os elementos [filesize()](function.filesize.md), [filemtime()](function.filemtime.md), [filetype()](function.filetype.md), [file\_exists()](function.file-exists.md), [is\_file()](function.is-file.md) e [is\_dir()](function.is-dir.md). |
| Suporta [unlink()](function.unlink.md) | Sim |
| Suporta [rename()](function.rename.md) | Sim |
| Suporta [mkdir()](function.mkdir.md) | Sim |
| Suporta [rmdir()](function.rmdir.md) | Sim |

### Notas

> **Nota**:
>
> FTPS somente é suportado quando a extensão [openssl](book.openssl.md)
> estiver habilitada.
>
> Se o servidor não suportar SSL, a conexão cairá para
> um FTP comum não criptografado.

> **Nota**:
> **Adição**  
>
> Arquivos podem ter conteúdo acrescentado pelo empacotador de URL `ftp://`.

### Veja também

- [Opções de contexto do FTP](context.ftp.md)

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
