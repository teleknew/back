CREATE TABLE interface.logic_services (
                                          id serial4 NOT NULL,
                                          logic_inputs_id int4 NULL,
                                          "number" int4 NULL,
                                          description varchar(40) NULL,
                                          speed float4 NULL,
                                          type_service int4 NULL,
                                          CONSTRAINT logic_services_pk PRIMARY KEY (id)
);