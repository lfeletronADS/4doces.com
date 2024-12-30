# 4Doces.com

Um site de página única para venda de doces feitos em casa. O projeto permite que clientes façam pedidos de doces personalizados e que a doceira gerencie a produção com base em relatórios automáticos.

## 📖 Descrição

O **4Doces.com** é uma solução prática para a venda de doces caseiros.

- O cliente se cadastra (este formulario esta construido enviando ao BD), seleciona os produtos desejados (a ser implementado), e faz o pedido.
- O sistema gera automaticamente um relatório com os detalhes do pedido (tipos de doces e quantidades) para facilitar a produção.
- O valor total do pedido é enviado ao cliente via WhatsApp com base gerada no relatorio do sistema , junto com instruções para pagamento por Pix, que será efetuado dentro do sistema de pagamento do WhatsApp.
- Após o pagamento, a API enviara uma cópia do relatório tanto para o cliente, quanto para o fornecedor.
- O objetivo é manter uma pagina unica sem navegaçao, mantendo o cliente focado na compra ate realizar o pagamento.

## Funcionalidades

- Cadastro de clientes com validação de dados.
- Seleção e personalização de produtos (tamanhos e quantidades).
- Cálculo automático do valor total do pedido.
- Geração de relatórios para controle de produção.
- Integração com API do WhatsApp para envio de informações.
- Gestão simples e eficiente para fornecedores e clientes.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS, Bootstrap (CDN)
- **Backend**: PHP
- **Banco de Dados**: MySQL
- **Integração**: API do WhatsApp
- **Outros**: JavaScript para cálculo dinâmico dos valores no frontend.

## Instalação

1. Clone o repositório:

   ```bash
      git clone https://github.com/lfeletronADS/4doces.com
   ```

## Instruções de Configuração e Uso

## Configuração do Ambiente

1. **Configure o ambiente local com Apache (XAMPP ou similar):**

   - Baixe e instale o [XAMPP](https://www.apachefriends.org/index.html) ou uma alternativa similar.
   - Inicie o Apache e o MySQL através do painel de controle do XAMPP.

2. **Importe o banco de dados `loja.sql` na sua instância MySQL:**

   - Abra o **phpMyAdmin** (acessível via `http://localhost/phpmyadmin`).
   - Selecione a opção "Importar" e escolha o arquivo `loja.sql` que está incluído no seu repositório.
   - Clique em "Executar" para importar a estrutura do banco de dados.

3. **Configure os detalhes de conexão com o banco de dados no arquivo `config.php`:**

   - Localize o arquivo `conexao.php` no diretório cadastro_venda/conexao.php do projeto.
   - Edite o arquivo com as credenciais do seu banco de dados MySQL:

   ```php
   $host = 'localhost'; // Seu host 127.0.0.1
   $dbname = 'loja'; // Nome do banco de dados
   $user = 'root'; // Seu usuário do banco / local é root
   $pass = ''; // Sua senha do banco xampp local sem senha

   ```

   - Salve o arquivo após as alterações.

4. **Configure a API do WhatsApp para integração de envio de mensagens:**
   - Registre-se em um serviço de API do WhatsApp, como [Twilio](https://www.twilio.com/whatsapp) ou [360dialog](https://www.360dialog.com/).
   - Obtenha suas credenciais de API (Token, SID, etc.).
   - Adicione as credenciais no código do seu projeto para que o envio de mensagens funcione corretamente.

## Como Usar

1. **Acesse o site e realize o cadastro:**

   - Abra o site 4doces.com em seu navegador.
   - Preencha os dados no formulário de cadastro e clique em "Cadastrar".

2. **Escolha os doces desejados e os respectivos tamanhos:**

   - Navegue pelas opções de doces e selecione os itens desejados.
   - Para cada doce, escolha o tamanho e a quantidade.
   - ( a ser implementado no card da index.html)

3. **Finalize o pedido e aguarde o envio do relatório via WhatsApp:**

   - Após revisar o pedido, clique em "Finalizar Pedido".
   - O sistema irá gerar um relatório com os detalhes do pedido e enviá-lo ao cliente e fornecedor via WhatsApp.

4. **Realize o pagamento por Pix e envie o comprovante pelo WhatsApp:**

   - O valor total será informado ao cliente via WhatsApp.
   - Realize o pagamento utilizando o código Pix gerado pelo WhatsApp.

   ## Notificações de Pagamentos via Pix no WhatsApp

   É possível receber notificações de pagamentos concluídos via Pix no WhatsApp para o seu aplicativo. Para isso, você precisa:

   ### Requisitos

   - Integrar a API do WhatsApp Business ao seu aplicativo.
   - Utilizar a funcionalidade de "Pagamentos" da API do WhatsApp Business.
   - Configurar webhooks para receber notificações de pagamentos.

   ### Passos para configurar notificações de pagamentos

   1. Registre-se no programa de desenvolvedores do WhatsApp Business.
   2. Crie um aplicativo e obtenha uma chave de API.
   3. Configure o webhook para receber notificações de pagamentos.
   4. Utilize a API para processar as notificações recebidas.

   ### Tipos de Notificações

   - `payment_received`: Notificação quando um pagamento é recebido.
   - `payment_accepted`: Notificação quando um pagamento é aceito.
   - `payment_declined`: Notificação quando um pagamento é recusado.

   ### Formato da Notificação

   A notificação será enviada em formato JSON, contendo informações como:

   - ID do pagamento
   - Valor do pagamento
   - Data e hora do pagamento
   - Status do pagamento
   - Informações do remetente e destinatário

   ### Documentação Oficial

   Consulte a [documentação oficial do WhatsApp Business API](([link unavailable](https://developers.facebook.com/docs/whatsapp/cloud-api/get-started))) para obter mais informações.

   ### Linguagens de Programação Suportadas

   A API do WhatsApp Business suporta várias linguagens, incluindo:

   - Python
   - Java
   - Node.js
   - C#
   - Ruby

5. **Aguardar a produçao dos doces conforme combinado:**
   - Após a confirmação do pagamento, o processo de produção será iniciado conforme os dados registrados de pagamento.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Contato

Em caso de dúvidas ou sugestões, entre em contato:

- **Desenvolvedor**: Leandro Machado
- **E-mail**: [adswebteste@gmail.com](mailto:adswebteste@gmail.com)
- **WhatsApp**: +55 51 99391-7057
- **GitHub**: [lfeletronADS](https://github.com/lfeletronADS)

Agradeço por visitar este repositório e por considerar fazer parte dessa jornada de aprendizado e evolução. 🙌

## Sobre Mim e o Projeto

Sou estudante e estou nos primeiros passos do desenvolvimento de projetos web e do uso do GitHub. Este projeto é uma oportunidade para aprender, experimentar e melhorar minhas habilidades técnicas e práticas. O objetivo deste repositório é desenvolver um sistema funcional enquanto interajo com outros desenvolvedores da comunidade, especialmente aqueles mais experientes, para obter feedback e orientações que contribuam para meu crescimento.

## 🌟 Um Convite à Comunidade

Gostaria de convidar desenvolvedores de todos os níveis para colaborar com este projeto. Sua experiência, sugestões e críticas construtivas serão essenciais para melhorar o código, implementar boas práticas e tornar este repositório uma referência de aprendizado colaborativo.

## 🚀 Como Você Pode Ajudar?

Você pode contribuir de diversas formas:

- Melhorando o código e otimizando funcionalidades.
- Sugerindo ou implementando novas ideias.
- Ajudando na documentação para torná-la mais clara e objetiva.
- Compartilhando boas práticas e estratégias para tornar o projeto mais eficiente.

## 🛠️ Passos para Contribuir

1. Faça um fork do repositório
2. Crie uma branch para suas alterações:

```bash

git checkout -b minha-contribuicao

1. Faça suas alterações e commit
2. Push para sua branch
3. Abra um Pull Request

** 💬 Contato

Se você quiser trocar ideias, tirar dúvidas ou compartilhar sugestões, fique à vontade para entrar em contato:

- **Desenvolvedor**: Leandro Machado
- **E-mail**: [adswebteste@gmail.com](mailto:adswebteste@gmail.com)
- **WhatsApp**: +55 51 99391-7057
- **GitHub**: [lfeletronADS](https://github.com/lfeletronADS)

Agradeço por visitar este repositório e por considerar fazer parte dessa jornada de aprendizado e evolução. 🙌
