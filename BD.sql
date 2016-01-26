USE Proyecto;

CREATE TABLE Involucrado (
	DPI varchar(10),
	PRIMARY KEY(DPI)
);

CREATE TABLE Sedes(
	SedeId int auto_increment,
	Direccion varchar(100) not null,
	Zona int not null,
	Telefono int,
	PRIMARY KEY(SedeId)
);

CREATE TABLE Policias (
	PoliciaId int,
	DPI varchar(10),
	Nombres varchar(50) not null,
	Apellidos varchar(50) not null,
	FechaIngreso datetime not null,
	Encargado bit,
	PRIMARY KEY(PoliciaId)
);

CREATE TABLE Comisarias (
	ComisariaId int auto_increment,
	Nombre varchar(50) not null,
	Direccion varchar(100) not null,
	Zona int not null,
	PoliciaId varchar(10) not null unique,
	PRIMARY KEY(ComisariaId),
	FOREIGN KEY(PoliciaId) REFERENCES Policias(PoliciaId)
);

CREATE TABLE AntPoliciacos (
	PoliciacoId int auto_increment,
	Descripcion varchar(200) not null,
	ComisariaId int not null,
	DPI varchar(10) not null,
	PRIMARY KEY(PoliciacoId),
	FOREIGN KEY(ComisariaId) REFERENCES Comisarias(ComisariaId),
	FOREIGN KEY(DPI) REFERENCES Involucrado(DPI)
);

CREATE TABLE DelitoPoliciacos (
	DelitoId int auto_increment,
	Descripcion varchar(100) not null,
	PRIMARY KEY(DelitoId)
);

CREATE TABLE AntPenales (
	PenalId int auto_increment,
	Descripcion varchar(200) not null,
	SedeId int not null,
	DPI varchar(10) not null,
	PRIMARY KEY(PenalId),
	FOREIGN KEY(SedeId) REFERENCES Sedes(SedeId),
	FOREIGN KEY(DPI) REFERENCES Involucrado(DPI)
);

CREATE TABLE DelitoPenales (
	DelitoId int auto_increment,
	Descripcion varchar(100) not null,
	PRIMARY KEY(DelitoId)
);

CREATE TABLE Policiacos (
	PoliciacoId int not null,
	DelitoId int not null,
	Fecha datetime not null,
	PRIMARY KEY(PoliciacoId,DelitoId),
	FOREIGN KEY(PoliciacoId) REFERENCES AntPoliciacos(PoliciacoId),
	FOREIGN KEY(DelitoId) REFERENCES DelitoPoliciacos(DelitoId)
);

CREATE TABLE Penales (
	PenalId int not null,
	DelitoId int not null,
	Fecha datetime not null,
	PRIMARY KEY(PenalId,DelitoId),
	FOREIGN KEY(PenalId) REFERENCES AntPenales(PenalId),
	FOREIGN KEY(DelitoId) REFERENCES DelitoPenales(DelitoId)
);

CREATE TABLE Conexion (
	ConexionId int auto_increment,
	IP varchar(15) not null unique,
	Puerto int not null,
	Extension varchar(10),
	Rol varchar(10),
	PRIMARY KEY(ConexionId)
);

CREATE TABLE LogConexion (
	LogId int,
	IP varchar(15) not null,
	Fecha datetime not null,
	PRIMARY KEY(LogId)
);

CREATE TABLE Usuarios (
	UserID int auto_increment,
	Usuario varchar(20) not null unique,
	Password varchar(15) not null unique,
	FechaCreacion datetime,
	PRIMARY KEY(UserID)
);

CREATE TABLE Crash (
	ID int,
	error varchar(100),
	PRIMARY KEY(Error)
);
