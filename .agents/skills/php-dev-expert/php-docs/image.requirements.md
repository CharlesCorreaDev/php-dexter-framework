# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.requirements.php

---

## Dependências

Se a biblioteca GD estiver presente (disponível em [» https://libgd.github.io](https://libgd.github.io)) será possível criar e
manipular imagens.

Os formatos de imagens possíveis de ser manipulados dependem da
versão da GD instalada, e de quaisquer outras bibliotecas
GD possivelmente necessárias para acessar esses formatos.
> **Nota**:
>
> libgd-2.1.0 ou superior é requerida. Alternativamente, pode-se
> usar a biblioteca GD fornecida com o PHP.

> **Nota**:
>
> A biblioteca GD requer a zlib >= 1.2.0.4.

Pode ser desejado melhorar a GD para lidar com mais formatos de imagens.

**Formatos de imagem suportados**

| Formato de imagem | Biblioteca a ser instalada | Notas |
| --- | --- | --- |
| `gif` |  |  |
| `avif` |  |  |
| `jpeg` | [» https://www.ijg.org/](https://www.ijg.org/) | Ao compilar a biblioteca jpeg (antes de compilar o PHP) deve-se usar a opção **--enable-shared** no passo de configuração. Senão, ocorrerá um erro dizendo `libjpeg.(a|so) not found` (biblioteca não encontrada) quando chegar o passo de configuração na compilação do PHP. |
| `png` | [» https://www.libpng.org/pub/png/libpng.html](https://www.libpng.org/pub/png/libpng.html) |  |
| `xpm` | [» https://www.ibiblio.org/pub/Linux/libs/X/!INDEX.html](https://www.ibiblio.org/pub/Linux/libs/X/!INDEX.html) | Em ambientes Unix, muito provavelmente a biblioteca já deve estar disponível, se o sistema tiver um ambiente X instalado. |
| `webp` |  |  |

Pode-se melhorar a GD para lidar com fontes diferentes.
A biblioteca [» FreeType 2](https://www.freetype.org/) é suportada.

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
