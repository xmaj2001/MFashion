# MFashion & Management

## Visão Geral

**MFashion & Management** é uma plataforma web desenvolvida em PHP para uma agência de moda focada em modelos não-padrão, incluindo crianças, adolescentes e jovens influenciadores com atitudes, estilos e muita personalidade. O projeto promove a inclusão social e apoia o sonho de jovens em se tornarem modelos. A plataforma oferece uma interface amigável para visitantes, uma seção informativa sobre a agência e um sistema de login seguro para administradores.

Este projeto foi desenvolvido como parte de um esforço para criar uma solução web robusta, com backend em PHP, integração com banco de dados e validação de dados, garantindo uma experiência confiável tanto para usuários quanto para administradores.

## Funcionalidades

- **Página Inicial**: Apresenta a missão da MFashion & Management com uma imagem de destaque, descrição da agência e navegação intuitiva.
- **Página da Agência**: Exibe informações detalhadas sobre a agência, incluindo dados de contato recuperados dinamicamente do banco de dados.
- **Sistema de Login**: Permite que administradores acessem uma área restrita com autenticação segura, validando nome, email e senha. Usa MD5 com uma chave personalizada para criptografia da senha.
- **Gestão de Sessões**: Controla o login e logout dos administradores, garantindo segurança e fluidez.
- **Validação de Entrada**: Utiliza a biblioteca `Respect\Validation` para validar nome e email, bloqueando caracteres especiais, espaços e formatos inválidos.
- **Layout Dinâmico**: Estrutura modular com templates reutilizáveis para header, footer e conteúdo, facilitando manutenção e escalabilidade.

## Tecnologias Utilizadas

- **PHP**: Backend para lógica do servidor e renderização de páginas.
- **MySQL**: Banco de dados para armazenar informações de contato e credenciais de administradores (via classe `db`).
- **Respect\Validation**: Biblioteca PHP para validação robusta de entrada.
- **HTML/CSS**: Frontend para estilização e layout das páginas.
- **Sessões PHP**: Gerenciamento de autenticação de usuários.
- **MD5**: Criptografia de senhas com uma chave personalizada.

## Estrutura do Projeto

```plaintext
├── Demo.mp4              # Vídeo de demonstração do projeto
├── images/               # Imagens usadas no site (ex.: md1.jpg)
├── App/
│   ├── Model/
│   │   └── db.php        # Classe para interação com o banco de dados
│   ├── lib/
│   │   ├── pagina.php    # Classe base para renderização de páginas
│   │   ├── session.php   # Gerenciamento de sessões
│   │   ├── valida.php    # Funções de validação auxiliar
│   └── Controller/
│       └── home.php      # Controlador principal (código fornecido)
├── public/               # Arquivos públicos (CSS, JS, etc.)
└── README.md             # Documentação do projeto
```

## Instalação

1. **Pré-requisitos**:
   - Servidor web (ex.: Apache) com PHP 7.4 ou superior.
   - MySQL ou outro banco de dados compatível.
   - Composer para instalar dependências.

2. **Passos**:
   ```bash
   # Clone o repositório
   git clone https://github.com/seu-usuario/mfashion-management.git

   # Entre no diretório
   cd mfashion-management

   # Instale dependências
   composer install

   # Configure o banco de dados
   # Crie um banco de dados MySQL e importe o schema (se disponível)
   # Atualize as credenciais em App/Model/db.php

   # Configure o servidor web
   # Aponte o document root para a pasta public/

   # Inicie o servidor
   php -S localhost:8000 -t public/
   ```

3. **Acesse a aplicação**:
   - Abra `http://localhost:8000` no navegador.

## Demonstração

Abaixo está um vídeo demonstrando as funcionalidades da plataforma MFashion & Management:

<video controls width="600">
  <source src="./Demo.mp4" type="video/mp4">
  Seu navegador não suporta o elemento de vídeo.
</video>
## Como Usar

- **Página Inicial**: Acesse `/` para ver a apresentação da agência.
- **Página da Agência**: Acesse `/agencia` para informações detalhadas e contatos.
- **Login**: Acesse `/login` para entrar na área administrativa. Use credenciais válidas (nome, email, senha).
- **Logout**: Acesse `/sair` para encerrar a sessão.

## Contribuição

1. Faça um fork do repositório.
2. Crie uma branch para sua feature (`git checkout -b feature/nova-funcionalidade`).
3. Commit suas alterações (`git commit -m 'Adiciona nova funcionalidade'`).
4. Push para a branch (`git push origin feature/nova-funcionalidade`).
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Contato

Para dúvidas ou sugestões, entre em contato com a equipe MFashion & Management via [email@example.com](mailto:email@example.com).

---

*Desenvolvido com 💻 e paixão por inclusão social.*
