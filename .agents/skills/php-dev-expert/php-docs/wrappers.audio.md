# Fluxos de áudio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.audio.php

---

# ogg://

ogg:// — Fluxos de áudio

### Descrição

Os arquivos abertos para leitura por meio do empacotador ogg://
são tratados como áudio compactado codificado usando o codec `OGG/Vorbis`.
Da mesma forma, os arquivos abertos para gravação ou adição por meio do
empacotador ogg:// são gravados como dados de áudio compactados.
[stream\_get\_meta\_data()](function.stream-get-meta-data.md), quando usado em um arquivo `OGG/Vorbis`
aberto para leitura, retornará vários detalhes sobre o fluxo,
incluído a etiqueta `vendor`, quaisquer
comentários incluídos em `comments`, o número de
canais em `channels`, a taxa no parâmetro `rate`,
e o intervalo da taxa de codificação descrito por:
`bitrate_lower`, `bitrate_upper`,
`bitrate_nominal`, e `bitrate_window`.

ogg:// (PECL)

> **Nota**:
> **Este empacotador não é habilitado por padrão**  
>
> Para poder utilizar o empacotador ogg://,
> a extensão
> [» OGG/Vorbis](https://pecl.php.net/package/oggvorbis)
> disponível em [» PECL](https://pecl.php.net/) precisa estar instalada.

### Uso

- ogg://soundfile.ogg
- ogg:///path/to/soundfile.ogg
- ogg://http://www.example.com/path/to/soundstream.ogg

### Opções

**Resumo do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restringido por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Permite leitura | Sim |
| Permite escrita | Sim |
| Permite adição | Sim |
| Permite leitura e ecrita simultâneas | Não |
| Suporta [stat()](function.stat.md) | Não |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

**Opções de contexto**

| Nome | Uso | Padrão | Modo |
| --- | --- | --- | --- |
| `pcm_mode` | Codificação PCM a ser aplicada durante a leitura, uma das seguintes constantes: **`OGGVORBIS_PCM_U8`**, **`OGGVORBIS_PCM_S8`**, **`OGGVORBIS_PCM_U16_BE`**, **`OGGVORBIS_PCM_S16_BE`**, **`OGGVORBIS_PCM_U16_LE`** e **`OGGVORBIS_PCM_S16_LE`**. (8 bits versus 16 bits, com sinal ou sem sinal, big ou little `endian`) | OGGVORBIS\_PCM\_S16\_LE | Leitura |
| `rate` | Taxa de amostragem de dados de entrada, expressa em Hz | 44100 | Escrita/Adição |
| `bitrate` | Quando fornecido como um número inteiro, refere-se à taxa de bits fixa para codificação. (16000 to 131072) Quando fornecido como um float, refere-se à qualidade da taxa de bits variável a ser utilizada. (-1.0 to 1.0) | 128000 | Escrita/Adição |
| `channels` | O número de canais de áudio a serem codificados, geralmente 1 (mono) ou 2 (estéreo). Pode variar até 16. | 2 | Escrita/Adição |
| `comments` | Um array de strings para codificar no cabeçalho da faixa. |  | Escrita/Adição |

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
