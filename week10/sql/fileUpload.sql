create table upload (
    id serial,
    filePath varchar(255) not null,
    fileName varchar(255) not null,
    fileType varchar(255) not null,
    fileSize bigint(20) unsigned not null,
    fileAdded datetime not null,
    primary key (id),
    unique index fileName (fileName),
    index filePath (filePath),
    index fileType (fileType)
);