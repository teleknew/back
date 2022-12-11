CREATE TABLE interface.ip_outputs (
                                      id serial4 NOT NULL,
                                      "idIpOutputs" int4 NULL,
                                      "namePort" varchar(20) NULL,
                                      "idPhysicalOutput" int4 NULL,
                                      "ipType" varchar NULL,
                                      "ipVersion" varchar NULL,
                                      "ipPort" varchar(15) NULL,
                                      "ipNumberPort" int4 NULL,
                                      "tcpUdpPort" varchar NULL,
                                      encapsulation varchar NULL,
                                      host varchar NULL,
                                      guid uuid NULL,
                                      CONSTRAINT ip_outputs_pk PRIMARY KEY (id)
);