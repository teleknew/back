CREATE TABLE interface.logic_outputs (
                                         id serial4 NOT NULL,
                                         "tsNumber" int4 NULL,
                                         "idPhysicalOutput" int4 NULL,
                                         "tsId" int4 NULL,
                                         bitrate numeric(5, 2) NULL,
                                         "namePort" varchar(20) NULL,
                                         description varchar(40) NULL,
                                         "sourceType" varchar NULL,
                                         "packetSize" int4 NULL,
                                         "idIpOutputs" int4 NULL,
                                         "mode" int4 NOT NULL DEFAULT 1,
                                         "activeOutput" int4 NULL,
                                         countService int4 NULL,
                                         "idOutput" int4 NULL,
                                         CONSTRAINT logic_outputs_pk PRIMARY KEY (id)
);