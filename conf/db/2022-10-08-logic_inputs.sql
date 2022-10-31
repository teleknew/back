CREATE TABLE interface.logic_inputs (
                                        id serial4 NOT NULL,
                                        "tsNumber" int4 NULL,
                                        "idPhysicalInput" int4 NULL,
                                        "tsId" int4 NULL,
                                        bitrate numeric(5, 2) NULL,
                                        "namePort" varchar(20) NULL,
                                        description varchar(40) NULL,
                                        "sourceType" varchar NULL,
                                        "packetSize" int4 NULL,
                                        "idIpInputs" int4 NULL,
                                        "mode" int4 NOT NULL DEFAULT 1,
                                        "activeInput" int4 NULL,
                                        countservise int4 NULL,
                                        CONSTRAINT logic_inputs_pk PRIMARY KEY (id)
);