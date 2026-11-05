# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/info.constants.php

---

# Constantes predefinidas

As constantes abaixo estão sempre disponíveis como parte do núcleo do PHP.

| Constantes | Descrição |
| --- | --- |
**Constantes predefinidas da função [phpcredits()](function.phpcredits.md)**| **`CREDITS_GROUP`** ([int](language.types.integer.md)) | Uma lista do núcleo de desenvolvedores |
| **`CREDITS_GENERAL`** ([int](language.types.integer.md)) | Créditos em geral: design e conceito da linguagem, autores do PHP e módulo SAPI. |
| **`CREDITS_SAPI`** ([int](language.types.integer.md)) | Uma lista dos módulos API dos servidores para o PHP, e seus autores. |
| **`CREDITS_MODULES`** ([int](language.types.integer.md)) | Uma lista dos módulos de extensão para o PHP, e seus autores. |
| **`CREDITS_DOCS`** ([int](language.types.integer.md)) | Os créditos para a equipe de documentação. |
| **`CREDITS_FULLPAGE`** ([int](language.types.integer.md)) | Normalmente usada em combinação com as outras opções. Indica que uma página HTML completa precisa ser mostrada incluindo a informação indicada pelas outras opções. |
| **`CREDITS_QA`** ([int](language.types.integer.md)) | Os créditos para a equipe de controle de qualidade. |
| **`CREDITS_ALL`** ([int](language.types.integer.md)) | Todos os créditos, equivalente a usar: `CREDITS_DOCS | CREDITS_GENERAL | CREDITS_GROUP | CREDITS_MODULES | CREDITS_QA | CREDITS_FULLPAGE`. Gera uma página HTML completa com as etiquetas apropriadas. Este é o valor padrão. |

| Constantes | Descrição |
| --- | --- |
**Constantes da função [phpinfo()](function.phpinfo.md)**| **`INFO_GENERAL`** ([int](language.types.integer.md)) | A linha da configuração, localização do php.ini, data de construção, servidor web, sistema e mais. |
| **`INFO_CREDITS`** ([int](language.types.integer.md)) | Créditos do PHP. Veja também [phpcredits()](function.phpcredits.md). |
| **`INFO_CONFIGURATION`** ([int](language.types.integer.md)) | Valores atuais e principais para as diretivas de configuração do PHP. Veja também [ini\_get()](function.ini-get.md). |
| **`INFO_MODULES`** ([int](language.types.integer.md)) | Módulos carregados e suas respectivas configurações. |
| **`INFO_ENVIRONMENT`** ([int](language.types.integer.md)) | Informações das variáveis de ambiente que também estão disponíveis em [$\_ENV](reserved.variables.environment.md). |
| **`INFO_VARIABLES`** ([int](language.types.integer.md)) | Mostra todas as [variáveis predefinidas](language.variables.predefined.md) do `EGPCS` (ENV, GET, POST, COOKIE, SERVER). |
| **`INFO_LICENSE`** ([int](language.types.integer.md)) | Informação sobre a licença do PHP. Veja também [» a seção sobre licença](https://www.php.net/license/). |
| **`INFO_ALL`** ([int](language.types.integer.md)) | Mostra todas as opções acima. Este é o valor padrão. |

| Constantes | Descrição |
| --- | --- |
**Constantes de modo INI**| **`INI_USER`** ([int](language.types.integer.md)) | A entrada pode der definida em scripts do usuário (como com [ini\_set()](function.ini-set.md)) ou no [registro do Windows](configuration.changes.md#configuration.changes.windows). A entrada pode ser definida no .user.ini. |
| **`INI_PERDIR`** ([int](language.types.integer.md)) | A entrada pode der definida no php.ini, .htaccess, httpd.conf ou .user.ini. |
| **`INI_SYSTEM`** ([int](language.types.integer.md)) | A entrada pode der definida no php.ini ou httpd.conf. |
| **`INI_ALL`** ([int](language.types.integer.md)) | A entrada pode der definida em qualquer lugar. |

Constantes de assetividade. Estes valores são usados para definir
as opções de assertividade em [assert\_options()](function.assert-options.md).

| Constantes | Descrição |
| --- | --- |
**Constantes da função [assert()](function.assert.md)**| **`ASSERT_ACTIVE`** ([int](language.types.integer.md)) | Habilita avaliação da função [assert()](function.assert.md).  **Aviso** Este recurso foi *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso é fortemente desencorajado. |
| **`ASSERT_CALLBACK`** ([int](language.types.integer.md)) | Função de retorno a ser chamada em afirmações falhadas.  **Aviso** Este recurso foi *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso é fortemente desencorajado. |
| **`ASSERT_BAIL`** ([int](language.types.integer.md)) | Termina execução em afirmações falhadas.  **Aviso** Este recurso foi *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso é fortemente desencorajado. |
| **`ASSERT_EXCEPTION`** ([int](language.types.integer.md)) | Emite uma [AssertionError](class.assertionerror.md) para cada afirmação falhada.  **Aviso** Este recurso foi *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso é fortemente desencorajado. |
| **`ASSERT_WARNING`** ([int](language.types.integer.md)) | Emite um alerta do PHP para cada afirmação falhada.  **Aviso** Este recurso foi *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso é fortemente desencorajado. |
| **`ASSERT_QUIET_EVAL`** ([int](language.types.integer.md)) | Desabilita `error_reporting` durante avaliação de expressão de afirmação. **Aviso** Este recurso foi *REMOVIDO* a partir do PHP 8.0.0. |

As constantes a seguir somente estão disponíveis se o sistema operacional
do servidor for Windows, e detalham diferentes informações de versão
de forma a possibilitar detecção de vários recursos e fazer uso deles.

| Constantes | Descrição |
| --- | --- |
**Constantes específicas do Windows**| **`PHP_WINDOWS_VERSION_MAJOR`** ([int](language.types.integer.md)) | A versão principal do Windows, que pode ser `4` (NT4/Me/98/95), `5` (XP/2003 R2/2003/2000) ou `6` (Vista/2008/7/8/8.1). |
| **`PHP_WINDOWS_VERSION_MINOR`** ([int](language.types.integer.md)) | A versão secundária do Windows, que pode ser `0` (Vista/2008/2000/NT4/95), `1` (XP), `2` (2003 R2/2003/XP x64), `10` (98) ou `90` (ME). |
| **`PHP_WINDOWS_VERSION_BUILD`** ([int](language.types.integer.md)) | O número de construção do Windows (por exemplo, Windows Vista com SP1 aplicado tem o número 6001) |
| **`PHP_WINDOWS_VERSION_PLATFORM`** ([int](language.types.integer.md)) | A plataforma em que o PHP está atualmente em execução, este valor é `2` no Windows Vista/XP/2000/NT4, Server 2008/2003 e `1` no Windows ME/98/95. |
| **`PHP_WINDOWS_VERSION_SP_MAJOR`** ([int](language.types.integer.md)) | A versão principal do pacote de serviço instalado, este valor é `0` se não houver nenhum instalado. Por exemplo, Windows XP com pacote de serviço 3 instalado terá valor de `3`. |
| **`PHP_WINDOWS_VERSION_SP_MINOR`** ([int](language.types.integer.md)) | A versão secundária do pacote de serviço instalado, este valor é `0` se não houver nenhum. |
| **`PHP_WINDOWS_VERSION_SUITEMASK`** ([int](language.types.integer.md)) | Uma máscara de bits que informa se vários recursos do Windows estão instalados, consulte a tabela abaixo para possível valores. |
| **`PHP_WINDOWS_VERSION_PRODUCTTYPE`** ([int](language.types.integer.md)) | Contém o valor usado para determinar as constantes `PHP_WINDOWS_NT_*`. Este valor pode ser uma das constantes `PHP_WINDOWS_NT_*` que indicam o tipo de plataforma. |
| **`PHP_WINDOWS_NT_DOMAIN_CONTROLLER`** ([int](language.types.integer.md)) | Este é um controlador de domínio. |
| **`PHP_WINDOWS_NT_SERVER`** ([int](language.types.integer.md)) | Este é um sistema de servidor (ex.: Server 2008/2003/2000), observe que se este for um controlador de domínio, será reportado como **`PHP_WINDOWS_NT_DOMAIN_CONTROLLER`**. |
| **`PHP_WINDOWS_NT_WORKSTATION`** ([int](language.types.integer.md)) | Este é um sistema de estação de trabalho (ex.: Vista/XP/2000/NT4). |

Esta tabela mostra uma lista de recursos que podem ser verificados para uso da máscara de bits
**`PHP_WINDOWS_VERSION_SUITEMASK`**.

**Campos de bits para suítes Windows**

| Bits | Descrição |
| --- | --- |
| `0x00000004` | Componentes do Microsoft BackOffice estão instalados. |
| `0x00000400` | Windows Server 2003, Web Edition está instalado. |
| `0x00004000` | Windows Server 2003, Compute Cluster Edition está instalado. |
| `0x00000080` | Windows Server 2008 Datacenter, Windows Server 2003, Datacenter Edition ou Windows 2000 Datacenter Server estão instalados. |
| `0x00000002` | Windows Server 2008 Enterprise, Windows Server 2003, Enterprise Edition, Windows 2000 Advanced Server ou Windows NT Server 4.0 Enterprise Edition estão instalados. |
| `0x00000040` | Windows XP Embedded está instalado. |
| `0x00000200` | Windows Vista Home Premium, Windows Vista Home Basic ou Windows XP Home Edition estão instalados. |
| `0x00000100` | Área de Trabalho Remota é suportada, mas somente uma sessão interativa é suportada. Este valor estará definido a menos que o sistema esteja sendo executado em modo de servidor de aplicação. |
| `0x00000001` | Microsoft Small Business Server foi instalado uma vez no sistema, mas pode ter sido atualizado para outra versão do Windows. |
| `0x00000020` | Microsoft Small Business Server está instalado com a licença de cliente restritiva. |
| `0x00002000` | Windows Storage Server 2003 R2 ou Windows Storage Server 2003 está instalado. |
| `0x00000010` | Terminal Services está instalado. Este valor sempre estará definido. Se este valor estiver definido mas `0x00000100` não estiver, então o sistema está sendo executado em modo de servidor de aplicação. |
| `0x00008000` | Windows Home Server está instalado. |

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
