var http = require('http');						//��Ҫ����Node���õĶ���
	http.createServer(function (req, res) {		//����һ��HTTP����
		res.writeHead(200, {'Content-Type': 'text/plain'});		//������Ӧͷ���ļ���ʽ
		res.end('Hello World!');								//����ַ���Hello World!
	}).listen(9527, "127.0.0.1");				//������HTTP�����ָ��IP�Ͷ˿�
console.log('Server running at http://127.0.0.1:9527/');		//���������ڷ���˿���̨�����ʾ��Ϣ