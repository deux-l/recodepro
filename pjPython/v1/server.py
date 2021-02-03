#para executar arquivo, basta, no terminal, digitar: python3 server.py

import os
try:
    from http.server import SimpleHTTPRequestHandler as Handler
    from socketserver import TCPServer as Server
except ImportError:
    from http.server import SimpleHTTPRequestHandler as Handler
    from http.server import HTTPServer as Server
PORT = int(os.getenv('PORT',8087))
os.chdir('api')

httpd = Server(("",PORT), Handler)
try:
    print("Servidor rodando na porta %i" % PORT)
    httpd.serve_forever()
except KeyboardInterrupt:
    pass
httpd.server_close()
