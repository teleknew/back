CREATE TABLE interface.logic_inputs (
                                        id serial4 NOT NULL,
                                        name_tp varchar(40) NULL,
                                        ts_id int4 NULL,
                                        speed float4 NULL,
                                        name_port varchar(20) NULL,
                                        ip_port varchar(15) NULL,
                                        number_port int4 NULL,
                                        description varchar(40) NULL,
                                        type_port varchar NULL,
                                        CONSTRAINT logic_inputs_pk PRIMARY KEY (id)
);