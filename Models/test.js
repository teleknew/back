/**
 * Add NIT table
 */
function addNit(deviceGuid, nit) {
    //actual
    if (nit.actual) {
        const SLNitsTsModelProto = new sl_remuxer_model_pb.SLNitsTsModelProto()
        // const srcList = SLNitsTsModelProto.getSrcList()
        // const dstList = SLNitsTsModelProto.getDstList()
        nit.actual.transportStreams.forEach(stream => {
            // src
            const src = new sl_remuxer_model_pb.SLPairModel()
            src.setFirst(stream.ts_id.src)
            src.setSecond(stream.on_id.src)
            SLNitsTsModelProto.addSrc(src)
            //dst
            const dst = new sl_remuxer_model_pb.SLPairModel()
            dst.setFirst(stream.ts_id.dst)
            dst.setSecond(stream.on_id.dst)
            SLNitsTsModelProto.addDst(dst)
        })
        const actualMap = this.nit.getActualMap()
        actualMap.set(deviceGuid, SLNitsTsModelProto)
    }

    //other
    if (nit.other) {
        const SLNitsTsModelProto = new sl_remuxer_model_pb.SLNitsTsModelProto()
        // const srcList = SLNitsTsModelProto.getSrcList()
        // const dstList = SLNitsTsModelProto.getDstList()
        nit.other.transportStreams.forEach(stream => {
            // src
            const src = new sl_remuxer_model_pb.SLPairModel()
            src.setFirst(stream.ts_id.src)
            src.setSecond(stream.on_id.src)
            SLNitsTsModelProto.addSrc(src)
            //dst
            const dst = new sl_remuxer_model_pb.SLPairModel()
            dst.setFirst(stream.ts_id.dst)
            dst.setSecond(stream.on_id.dst)
            SLNitsTsModelProto.addDst(dst)
        })
        const otherMap = this.nit.getOtherMap()
        otherMap.set(deviceGuid, SLNitsTsModelProto)
    }

    this.updateNit()
}