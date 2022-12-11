CREATE TABLE interface.ip_inputs (
                                     id serial4 NOT NULL,
                                     "idIpInputs" int4 NULL,
                                     "namePort" varchar(20) NULL,
                                     "idPhysicalInput" int4 NULL,
                                     "ipType" varchar NULL,
                                     "ipVersion" varchar NULL,
                                     "ipPort" varchar(15) NULL,
                                     "ipNumberPort" int4 NULL,
                                     "tcpUdpPort" varchar NULL,
                                     encapsulation varchar NULL,
                                     host varchar NULL,
                                     guid uuid NULL,
                                     CONSTRAINT ip_inputs_pk PRIMARY KEY (id)
);