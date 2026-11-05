# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Data/Horário**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [date.default\_latitude](datetime.configuration.md#ini.date.default-latitude) | "31.7667" | **`INI_ALL`** |  |
| [date.default\_longitude](datetime.configuration.md#ini.date.default-longitude) | "35.2333" | **`INI_ALL`** |  |
| [date.sunrise\_zenith](datetime.configuration.md#ini.date.sunrise-zenith) | "90.833333" | **`INI_ALL`** | Antes do PHP 8.0.0, o padrão era "90.583333" |
| [date.sunset\_zenith](datetime.configuration.md#ini.date.sunset-zenith) | "90.833333" | **`INI_ALL`** | Antes do PHP 8.0.0, o padrão era "90.583333" |
| [date.timezone](datetime.configuration.md#ini.date.timezone) | "UTC" | **`INI_ALL`** | A partir do PHP 8.2, um aviso é emitido quando este parâmetro é configurado para um valor inválido ou para um string vazio. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`date.default_latitude` [float](language.types.float.md)
:   A latitude padrão
    variando de `0` no equador,
    até `+90` para o norte, e `-90` para o sul.

`date.default_longitude` [float](language.types.float.md)
:   A longitude padrão
    variando de `0` no meridiano primário
    até `+180` para o leste e `−180` para o oeste.

`date.sunrise_zenith` [float](language.types.float.md)
:   O ápice do nascer do sol padrão.

    O valor padrão é 90°50'. Os 50' adicionais são devido a dois
    componentes: o raio aparente do sol, que é 16', e a refração
    atmosférica aparente, que é de 34'.

`date.sunset_zenith` [float](language.types.float.md)
:   O ápice do pôr-do-sol padrão.

`date.timezone` [string](language.types.string.md)
:   O fuso horário padrão usado por todas as funções de data/horário.
    A ordem de precedência para qual fuso horário será utilizado se nenhum
    for explicitamente mencionado é descrita na
    função [date\_default\_timezone\_get()](function.date-default-timezone-get.md). Acesse [Lista de Fusos Horários Suportados](timezones.md) para uma lista de todos os fusos horários suportados.

> **Nota**:
>
> As primeiras quatro opções de configuração são utilizadas somente pelas funções
> [date\_sunrise()](function.date-sunrise.md) e [date\_sunset()](function.date-sunset.md).

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
