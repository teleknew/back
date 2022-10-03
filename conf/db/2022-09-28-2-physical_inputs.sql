CREATE TABLE interface.physical_inputs (
                                          id serial4 NOT NULL,
                                          "type" int4 NULL,
                                          "typeId" int4 NULL,
                                          description varchar NULL,
                                          CONSTRAINT physical_inputs_pk PRIMARY KEY (id)
);