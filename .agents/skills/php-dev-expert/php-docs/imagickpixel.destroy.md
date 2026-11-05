# Desaloca recursos associados a este objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.destroy.php

---

# ImagickPixel::destroy

(PECL imagick 2, PECL imagick 3)

ImagickPixel::destroy — Desaloca recursos associados a este objeto

### Descrição

public function **ImagickPixel::destroy**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desaloca quaisquer recursos usados ​​pelo objeto ImagickPixel e desativa qualquer
cor associada. O objeto não deve ser usado após a função destroy()
ter sido chamada.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
