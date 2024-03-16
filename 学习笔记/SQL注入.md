查 库： select schema\_name from information\_schema.schema
查 表： select table\_name from information\_schema.tables where table\_schema=库名
查 列： select column\_name from information\_schema.columns where table\_name=表名
查数据： select 列名 from 库名.表名