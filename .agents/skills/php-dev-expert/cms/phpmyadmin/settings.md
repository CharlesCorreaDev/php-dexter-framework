# Configurando o phpMyAdmin — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/settings.html

---

# Configurando o phpMyAdmin[¶](#configuring-phpmyadmin "Link permanente para este título")

Existem muitas configurações que podem ser usadas para personalizar a interface. Essas configurações estão descritas em [Configuração](config.md#config). Existem várias camadas da configuração.

As configurações globais podem ser configuradas no `config.inc.php`, conforme descrito em [Configuração](config.md#config). Esta é a única maneira de configurar conexões a bancos de dados e outras configurações gerais do sistema.

Além disso, existem configurações de usuário que podem ser armazenadas persistentemente em [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables), possivelmente configuradas automaticamente através do [Configuração Zero](setup.md#zeroconf). Se as [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) não estiverem configuradas, as configurações são temporariamente armazenadas nos dados da sessão; estas são válidas somente até você efetuar o logout.

Você também pode salvar a configuração de usuário para uso posterior, seja baixando como um arquivo ou para o armazenamento local do navegador. Você pode encontrar essas duas opções na aba Settings. As configurações armazenadas no armazenamento local do navegador serão oferecidas automaticamente para carregamento quando você fizer o login no phpMyAdmin.
