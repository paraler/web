var mysql = require("mysql");  //����ģ��
var client = mysql.createConnection({ //��������
    "host":"localhost",
    "port":"3306",
    "user":"root",
    "password":"123123@"
});
client.query("USE test",function(error,results){
	if(error){//����ʱ�˳�
		console.log("ClientConnectionReady Error:"+error.message);
		client.end();return;
	}
	InsertData(client);
});
//��������
InsertData=function(){
    var values=["Hello!","node 2 mysql at:"+Math.random()];
		client.query("INSERT INTO node SET title=?,info=?",values,function(error,results){
			if(error){//����ʱ�˳�
				console.log("InsertData Error:"+error.message);
				client.end();return;
			}
			console.log("Inserted: "+results.affectedRows+" row.");
			console.log("Id inserted: "+results.insertId);
		});
    GetData(client);
};
//��ѯ����
GetData=function(client){
    client.query("SELECT * FROM node",function(error,results,fields){
            if(error){//����ʱ�˳�
                console.log("GetData Error:"+error.message);
                client.end();return;
            }
            console.log("Results:");
            console.log(results);//����̨�����¼��
            if(results.length>0){
                var rs = results[0];//ȡ�õ�һ����¼
                console.log("Title:"+rs.title);//���ָ���ֶ�
                console.log("info:"+rs["info"]);
            }
        }
    );
    client.end();//�ر����ݿ�����
    console.log("Connection closed.");
}; 