import mysql.connector

# Conectando ao banco de dados
conn = mysql.connector.connect(
    host="localhost",  # Endereço do servidor MySQL
    user="root",    # Nome de usuário do MySQL
    password="root",  # Senha do MySQL
    database="ingressos"  # Nome do banco de dados
)

# Criando um cursor
cursor = conn.cursor()

# Executando uma consulta
cursor.execute("SELECT id, pago FROM ingressos")

# Recuperando os resultados
resultados = cursor.fetchall()
pos = []
estado2 = []
for x in resultados: 
    pos.append(x[0])
    estado2.append(x[1])
# Exibindo os resultados

# Fechando a conexão
conn.close()
