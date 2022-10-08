CREATE TABLE interface.program_stream (
                                          id serial4 NOT NULL,
                                          "number" int4 NULL,
                                          hex varchar NULL,
                                          description varchar NULL,
                                          speed float4 NULL,
                                          CONSTRAINT program_stream_pk PRIMARY KEY (id)
);